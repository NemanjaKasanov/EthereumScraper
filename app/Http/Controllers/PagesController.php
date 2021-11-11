<?php

namespace App\Http\Controllers;

use App\Models\Ethereum;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function addressInformationHtml(Request $request)
    {
        $html = view('partials.address-information', [
            'address' => $request->input('address_information')
        ])->render();
        return response()->json($html);
    }

    public function transactionsTableHtml(Request $request)
    {
        $html = view('partials.transactions-information', [
            'transactions' => $request->input('transactions')['result'],
            'ether_price' => Ethereum::getEtherPriceInDollars()
        ])->render();
        return response()->json($html);
    }
}