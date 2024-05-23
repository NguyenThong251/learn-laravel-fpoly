<?php

namespace App\Http\Controllers;

use App\Models\banner;
use App\Models\categories;
use App\Models\products;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    private $products;
    // private $banners;
    // private $categories;
    public function __construct(){
        $this->products = new products();
        // $this->banners = new banner();
        // $this->categories = new categories();
    }

     public $data =[];
    public function detail($id){
        $this -> data['title']='Detail';
        $product = $this->data['productsById'] = $this->products->getProductById($id);
        $product->price_after_discount = $product->discount > 0
        ? $product->price - ($product->price * $product->discount / 100)
        : $product->price;
        $this -> data['productsDetail'] = $product ;
    $this -> data['relatedProducts'] = $this->products->getRelatedProducts($product->category_id, $id);
    foreach ($this -> data['relatedProducts'] as $product) {
        $product->price_after_discount = $product->discount > 0
            ? $product->price - ($product->price * $product->discount / 100)
            : $product->price;
    }
        //    dd($productsDetail);
    return view('clients.detail',$this ->data);
    }
}