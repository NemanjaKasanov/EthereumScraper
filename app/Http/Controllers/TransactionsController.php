<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TransactionsController extends Controller
{
    private $transactions;

    public function __construct(Transaction $transactions)
    {
        $this->transactions = $transactions;
    }

    public function getTransactions(Request $request)
    {
        $address = $request->input('address');
        $from_block = $request->input('from_block');
        $per_page = $request->input('per_page');
        $page_number = $request->input('page_number');

        if (!$this->isValidNumberValue($from_block)) {
            $from_block = 1;
        }
        if (!$this->isValidNumberValue($per_page)) {
            $per_page = 20;
        }

        $response = $this->transactions->getTransactions($address, $from_block, $per_page, $page_number);
        return response()->json($response);
    }

    private function isValidNumberValue($value)
    {
        if (is_numeric($value) && $value > 0) {
            return true;
        }
        return false;
    }

    public function getTransactionModalContent(Request $request)
    {
        $transaction = $request->input('transaction');
        $transaction['value'] = $this->convertNumberToEther($transaction['value']);
        $transaction['gasPrice'] = $this->convertNumberToEther($transaction['gasPrice']);
        $transaction['gasUsed'] = $this->convertNumberToEther($transaction['gasUsed']);
        $transaction['timestamp'] = $this->timestampToDateTimeString($transaction['timestamp']);

        $html_response = view(
            'partials.transaction-details',
            [
                'transaction' => $transaction
            ]
        )->render();

        return response()->json($html_response);
    }

    public static function convertNumberToEther($number)
    {
        $new_number = $number;
        $number_length = strlen((string)$number);
        if ($number_length < 19) {
            $number_of_zeros_to_add = 19 - $number_length;
            $zeros_string = '';
            for ($i = 0; $i < $number_of_zeros_to_add; $i++) {
                $zeros_string .= '0';
            }
            $new_number = $zeros_string . $number;
        }
        $ether = floatval(substr_replace((string)$new_number, '.', 1, 0));
        return $ether;
    }

    public static function timestampToDateTimeString($timestamp)
    {
        $date_string = Carbon::createFromTimestamp($timestamp)->toDateTimeString();
        return $date_string;
    }
}