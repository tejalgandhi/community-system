<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class HomeController extends BaseController
{

    public function index(){
        return view('index');
    }

    public function post_login(LoginRequest $request){
       
            $validator = Validator::make($request->all(), [
                'email' => 'required|email',
                'password' => 'required|string|min:6',
            ]);

            if ($validator->fails()) {
                return response()->json($validator->errors(), 422);
            }
            $emailCount = User::where('email', $request->email)->count();
            if ($emailCount == 0) {
                return redirect('/')
                    ->withErrors(['No such email found']);
            }

        $remember_me = $request->has('remember_me') ? true : false;
        if (Auth::attempt(['email' => $request->email, 'password' =>$request->password],$remember_me))
        {
            if(!empty($remember_me)){
                $user = auth()->user();
                Auth::login($user,true);
            }
            return redirect()->route('home');
        }
        else
        {
            return redirect('/')
                ->withErrors(['Please enter valid password']);
        }
    }

    public function logout(Request $request)
    {
        /**
         * Used for Admin Logout
         * @return redirect to Admin->Logout
         */
        Auth::logout();
        return redirect()->route('login');
    }

    public function home(){
        return view('home');
    }


}