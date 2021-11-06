<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressesController extends Controller
{
    private $address;

    public function __construct(Address $address)
    {
        $this->address = $address;
    }

    public function getAddressInformation($address)
    {
        $response = $this->address->getAddressInformation($address);
        return response()->json($response);
    }
}
