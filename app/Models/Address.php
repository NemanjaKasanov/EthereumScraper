<?php

namespace App\Models;

use Goutte\Client;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    private $client;
    private $website_address;
    private $path;

    public function __construct(Client $client)
    {
        parent::__construct();
        $this->client = $client;
        $this->website_address = 'https://etherscan.io';
        $this->path = '/address';
    }

    public function getAddressInformation($address)
    {
        $target_page = $this->website_address . $this->path . '/' . $address;
        $page_object = $this->client->request('GET', $target_page);

        $page_title = $this->getPageTitle($page_object);
        if (!$this->isValidAddress($page_title)) {
            return [
                'address' => $address,
                'data' => $page_title,
                'success' => false,
            ];
        }

        $address_tag = $this->getAddressTag($page_object);
        $contract_overview_card_object = $this->getContractOverviewCardObject($page_object);
        $balance = $this->getBalance($contract_overview_card_object);
        $value = $this->getValue($contract_overview_card_object);

        return [
            'address' => $address,
            'tag' => $address_tag,
            'balance' => $balance,
            'value' => $value,
            'title' => $page_title,
            'success' => true,
        ];
    }

    private function getPageTitle($page_object)
    {
        return $page_object->filter('.d-flex.flex-wrap.justify-content-between.align-items-center')
            ->children()
            ->first()
            ->filter('h1')
            ->text();
    }

    private function isValidAddress($page_title)
    {
        if ($page_title == 'Address (Invalid Address)')
            return false;
        return true;
    }

    private function getAddressTag($page_object)
    {
        return $page_object->filter('.u-label.u-label--secondary.text-dark.font-size-1.rounded.py-1.px-3')
            ->text();
    }

    private function getContractOverviewCardObject($page_object)
    {
        return $page_object->filter('.card-header.d-flex.justify-content-between.align-items-center')
            ->nextAll()
            ->first()
            ->filter('.row.align-items-center');
    }

    private function getBalance($contract_overview_card_object)
    {
        return $contract_overview_card_object->eq(0)->filter('div')->eq(2)->text();
    }

    private function getValue($contract_overview_card_object)
    {
        return $contract_overview_card_object->eq(1)->filter('div')->eq(2)->text();
    }
}