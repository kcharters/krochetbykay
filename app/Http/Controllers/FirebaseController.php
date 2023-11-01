<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Kreait\Firebase\Factory;

class FirebaseController extends Controller
{
    //
    
    public static function connect()
    {
        $firebase = (new Factory)
            ->withServiceAccount('C:\Users\chaki15p\Git\practice-projects\krochetbykay\krochetbykayknits-3c94637d3937.json')
            ->withDatabaseUri('https://krochetbykayknits-default-rtdb.firebaseio.com');
        return $firebase->createDatabase();
    }
    public static function adminauth()
    {
        $firebase = (new Factory)
            ->withServiceAccount('C:\Users\chaki15p\Git\practice-projects\krochetbykay\krochetbykayknits-3c94637d3937.json')
            ->withDatabaseUri('https://krochetbykayknits-default-rtdb.firebaseio.com');
        return $firebase->createAuth();
    }
        
}
