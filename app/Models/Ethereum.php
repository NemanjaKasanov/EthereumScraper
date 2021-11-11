<?php

namespace App\Models;

use Goutte\Client;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ethereum extends Model
{
    use HasFactory;

    public static function getEtherPriceInDollars()
    {
        $client = new Client();
        $page_object = $client->request('GET', 'https://ethereumprice.org/');
        $ethereum_price = $page_object->filter('#coin-price')
            ->children()
            ->eq(1)
            ->text();
        $ethereum_price = str_replace(',', '', $ethereum_price);
        return floatval($ethereum_price);
    }
}