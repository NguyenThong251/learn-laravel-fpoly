<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public $data =[];
    public function login (){
        $this->data['title'] = 'Login-Admin';
        $this -> data['errorMessage'] = 'Dữ liệu không tồn tại !';
        // $this -> data['errorMessage'] = 'The data does not exist in the database';
        return view('layouts.admin_login',$this->data);
    }
    public function postlogin(UserRequest $request){
        // dd($request);
        // if (Auth::attempt([])) {
        //     # code...
        // }
        return response() -> json(['status' => 'success']);
    }

    public function logout() {
        Auth::logout();
        return redirect('loginAdmin');

    }
    // public function postlogin(Request $request){
    //     // dd($request);
    //     $request->validate([
    //         'admin_email' => 'required|email',
    //         'admin_password' => [
    //             'required',
    //             Password::min(8)
    //                 ->letters()
    //                 ->mixedCase()
    //                 ->numbers()
    //                 ->symbols()
    //                 ->uncompromised(),
    //         ],
    //     ]);
    // }
}