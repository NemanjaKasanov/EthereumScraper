<?php

namespace App\Models;

use Goutte\Client;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Ethereum
{
    use HasFactory;

    public function __construct()
    {
        parent::__construct();
        $this->path = '/address';
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

    public function getAddressInformation($address)
    {
        $target_page = $this->website_address . $this->path . '/' . $address;
        $page_object = $this->client->request('GET', $target_page);

        $page_title = $page_object->filter('.d-flex.flex-wrap.justify-content-between.align-items-center')
            ->children()
            ->first()
            ->filter('h1')
            ->text();
        if ($page_title == 'Address (Invalid Address)') {
            return [
                'address' => $address,
                'data' => $page_title,
                'success' => false,
            ];
        }

        $address_tag = $page_object->filter('.u-label.u-label--secondary.text-dark.font-size-1.rounded.py-1.px-3')
            ->text();
        $contract_overview_card_object = $page_object->filter('.card-header.d-flex.justify-content-between.align-items-center')
            ->nextAll()
            ->first()
            ->filter('.row.align-items-center');
        $balance = $contract_overview_card_object->eq(0)->filter('div')->eq(2)->text();
        $value = $contract_overview_card_object->eq(1)->filter('div')->eq(2)->text();

        return [
            'address' => $address,
            'tag' => $address_tag,
            'balance' => $balance,
            'value' => $value,
            'title' => $page_title,
            'success' => true,
        ];
    }
}
