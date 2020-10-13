<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return view('register');
    }

    public function welcome(Request $request){
        $namaD = $request->input('fname');
        $namaB = $request->input('lname');

//        return $namaB . $namaD ;

        return view('welcome',['namaD' => $namaD] , ['namaB' => $namaB] );
    }
}
