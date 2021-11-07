<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Block;
use App\Models\Ethereum;
use App\Models\Transaction;
use Illuminate\Http\Request;

class PagesController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->data = [];
    }

    public function index()
    {
        // OriginTrail
        // dd($this->ethereum->getAddressInformation('0xaa7a9ca87d3694b5755f213b5d04094b8d0f0a6f'));

        // Coinbase 1
        // dd($this->ethereum->getAddressInformation('0x71660c4005ba85c37ccec55d0c4493e66fe775d3'));

        // dd($this->ethereum->test());

        return view('pages.home', $this->data);
    }

    public function addressInformationHtml(Request $request)
    {
        $html = view('partials.address-information', [
            'address' => $request->input('address_information')
        ])->render();
        return response()->json($html);
    }
}