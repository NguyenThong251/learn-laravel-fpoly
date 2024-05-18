<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use App\Models\categories;
class ProductController extends Controller
{
    private $categories;
    public function __construct(){
        $this->categories = new categories();
    }
    public $data = [];
    public function index(){
        $this->data['categories'] = $this->categories->getCategoriesLimit();
        $this->data['title'] ='Shop';
        return view('clients.shop', $this->data);
    }
}