<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function login(){
        return view('login');
    }

    public function registration(){
        return view('registration');
    }

    public function login_submit(Request $request){

    }
    public function registration_submit(Request $request){
        $request->validate(
            [
                'email'=>'required|email',
                'name'=>'required|regex:/^[A-Z a-z .]+$/',
                'password'=>'required|min:6',
                'cpassword'=>'same:password',
                'phone'=>'required|min:8|max:14'
            ],
            [

                'email.required'=>'Please provide your Email',
                'name.required'=>'Please provide your Name',
                'password.required'=>'Please provide your Password',
                'cpassword.same'=>'The Confirm Password and Password must match.',
                'phone.required'=>'Please provide your Phone Number',
                'sname.required'=>'Please provide your Shop Name'
            ]
            );

            return redirect()->route('login');
    }
}
