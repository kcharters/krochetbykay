<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\FirebaseController;

class AdminController extends Controller
{
    private $database;
    private $auth;

    public function __construct()
    {
        $this->$auth = FirebaseController::adminauth();
        $this->database = FirebaseController::connect();
    }
    //
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
        ->getReference('blog/' . $request['title'])
        ->remove();

    return response()->json('blog has been deleted');
    }
    public function index()
    {
        return view('admin.index');
    }
    
}
