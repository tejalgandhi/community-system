<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class CommunityController extends BaseController
{

    public function index(){
        return view('user.community.list');
    }

    public function create(){
        $id = 0;
        return view('user.community.create',compact('id'));
    }
    public function edit($id){
        return view('user.community.create',compact('id'));
    }

}