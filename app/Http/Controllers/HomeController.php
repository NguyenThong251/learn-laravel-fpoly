<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\Models\products;
class HomeController extends Controller
{
    private $products;
    public function __construct(){
        $this->products = new products();
    }
     public $data =[];
    public function index(){
        // $title = "Trang chủ";
        $this->data['products'] = $this->products->getAllProducts();
        $this -> data['title']='Home';
        return view('clients.home',$this ->data);
        // return view('clients.home',compact('title'));
    }
}