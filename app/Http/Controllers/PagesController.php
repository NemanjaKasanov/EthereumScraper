<?php

namespace App\Http\Controllers;

use App\Models\Ethereum;
use Illuminate\Http\Request;

class PagesController extends BaseController
{
    private $ethereum;

    public function __construct(Ethereum $ethereum)
    {
        parent::__construct();
        $this->data = [];
        $this->ethereum = $ethereum;
    }

    public function index()
    {
        dd($this->ethereum->test());
        return view('pages.home', $this->data);
    }
}
