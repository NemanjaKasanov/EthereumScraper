<?php

namespace App\Models;

use Goutte\Client;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Block extends Ethereum
{
    use HasFactory;

    public function __construct(Client $client)
    {
        parent::__construct();
        $this->client = $client;
    }
}
