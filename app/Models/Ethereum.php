<?php

namespace App\Models;

use Goutte\Client;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ethereum extends Model
{
    use HasFactory;

    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function test()
    {
        $page_address = 'https://etherscan.io/address';
        $ethereum_address = '/0xaa7a9ca87d3694b5755f213b5d04094b8d0f0a6f';
        $full_page_address = $page_address . $ethereum_address;
        $page = $this->client->request('GET', $full_page_address);

        // Crawling options, methods, selectors
        $data = $page->filter('#mainaddress')->text();
        $page->filter('#id')->each(function ($element) {
            // goes through each element of the tag
        });

        return $data;
    }
}
