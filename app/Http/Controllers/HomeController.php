<?php

namespace App\Http\Controllers;

use App\Models\banner;
use App\Models\categories;
use App\Models\products;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    private $products;
    private $banners;
    private $categories;
    public function __construct(){
        $this->products = new products();
        $this->banners = new banner();
        $this->categories = new categories();
    }
     public $data =[];
    public function index(){
        $this -> data['title']='Home';
        $this ->data['banners'] = $this->banners->getBanner();
        $this->data['productsAll'] = $this->products->getAllProducts();
        $this->data['categoriesLimit'] = $this->categories->getCategoriesWithProductCountLimit();
        // xử lý logic giảm giá price trong product
        foreach ($this->data['productsAll'] as $product) {
            $product->price_after_discount = $product->discount > 0
            ? $product->price - ($product->price * $product->discount / 100)
            : $product->price;
        }
        //end
        return view('clients.home',$this ->data);
        // return view('clients.home',compact('title'));
    }
   
}