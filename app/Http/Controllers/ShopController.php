<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Services\FirebaseService;

class ShopController extends Controller
{
    private $database;

    public function __construct()
    {
       $this->database = FirebaseService::connect();
    }
    public function create(Request $request) 
    {
        $this->database
            ->getReference('test/blogs/' . $request['title'])
            ->set([
                'title' => $request['title'] ,
                'content' => $request['content']
            ]);

        return response()->json('blog has been created');
    }
    public function edit(Request $request) 
    {
        $this->database->getReference('test/blogs/' . $request['title'])
            ->update([
                'content/' => $request['content']
            ]);

        return response()->json('blog has been edited');
    }
    public function delete(Request $request)
    {
        $this->database
            ->getReference('test/blogs/' . $request['title'])
            ->remove();
    
        return response()->json('blog has been deleted');
    }
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