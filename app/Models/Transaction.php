<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class Transaction extends Model
{
    use HasFactory;

    private $request;
    private $api_address;
    private $path;

    public function __construct(Http $request)
    {
        parent::__construct();
        $this->request = $request;
        $this->api_address = 'https://api.etherscan.io';
        $this->path = '/api';
    }

    public function getTransactions($address, $from_block, $per_page, $page_number)
    {
        return Http::get($this->api_address . $this->path, [
            'apikey' => 'KAWBJUMI2HWU3Q6699RKJDFHRCZTJUGGV9',
            'action' => 'txlist',
            'module' => 'account',
            'address' => $address,
            'startblock' => $from_block,
            'endblock' => 999999999,
            'page' => $page_number,
            'offset' => $per_page,
            'sort' => 'desc',
        ])->object();
    }
}