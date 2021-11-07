<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
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

        $response = $this->transactions->getTransactions($address, $from_block, $per_page, $page_number);
        return response()->json($response);
    }
}