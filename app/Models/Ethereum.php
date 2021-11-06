<?php

namespace App\Models;

use Goutte\Client;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

abstract class Ethereum extends Model
{
    use HasFactory;

    public $client;
    public $website_address;
    public $path;
    public $query_string;

    public function __construct()
    {
        $this->client = new Client();
        $this->website_address = 'https://etherscan.io';
    }
}
