<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

use Kreait\Firebase\Contract\Auth as FirebaseAuth;
use Kreait\Firebase\Auth\SignInResult\SignInResult;
use Kreait\Firebase\Exception\FirebaseException;
use Illuminate\Validation\ValidationException;

use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use App\Http\Controllers\FirebaseController;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
   
    protected function login(Request $request)
    {
        $auth = FirebaseController::adminauth();
        try {
            
            $signInResult = $auth->signInWithEmailAndPassword(
                $request["email"],
                $request["password"]
            );
            $user = new User($signInResult->data());

            //uid Session
            $loginuid = $signInResult->firebaseUserId();
            Session::put('uid',$loginuid);

            $result = Auth::login($user);
            return redirect("admin.dashboard");

        } catch (FirebaseException $e) {
            throw ValidationException::withMessages([
                $this->username() => [trans("auth.failed")],
            ]);
        }
    }
    public function username()
    {
        return "email";
    }
    public function dashboard()
    {
        $database = FirebaseController::connect();
        $reference = $database->getReference('Products');
        $snapshot = $reference->getSnapshot();
        $value = $snapshot->getValue();
        return view('admin.dashboard',['products'=>$value]);
    }
    public function create(Request $request){
        $database = FirebaseController::connect();
        $database->getReference('Products')
        ->push([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price]);

    }
}
