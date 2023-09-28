<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;


class ShopController extends Controller
{
    public function index()
    {
        return view('shop.index');
    }
    public function bags()
    {
        return view('shop.bags');
    }
}