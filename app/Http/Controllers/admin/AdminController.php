<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login (){
        return view('layouts.admin_login');
    }
    public function postlogin(Request $request){
        // dd($request);
        $request->validate([
            'admin_email' => 'required|unique:posts|max:255',
            'admin_password' => 'required',
            'publish_at' => 'nullable|date',
        ]);
    }
}