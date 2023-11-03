<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;


class ShopController extends Controller
{

    public function index(Request $request){
        $database = FirebaseController::connect();
        $reference = $database->getReference('Products');
        $snapshot = $reference->getSnapshot();
        $value = $snapshot->getValue();
        return view('shop.product',['products'=>$value]);
    }
   
}