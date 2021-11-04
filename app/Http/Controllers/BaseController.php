<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    private $data = [];

    public function __construct()
    {
    }
}
