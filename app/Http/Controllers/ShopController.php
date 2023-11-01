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
    public function headwear()
    {
        return view('shop.headwear');
    }
    public function scarfs()
    {
        return view('shop.scarfs');
    }
    public function sets()
    {
        return view('shop.sets');
    }
    public function bandc()
    {
        return view('shop.bandc');
    }
}