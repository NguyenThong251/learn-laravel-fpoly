<?php

namespace App\Http\Controllers;

use App\Models\brands;
use Illuminate\Http\Request;
use App\Models\products;
use App\Models\categories;
class ProductController extends Controller
{
    private $products;
    private $categories;
    private $brands;
    public function __construct(){
        $this->categories = new categories();
        $this->brands = new brands();
        $this->products = new products();
    }
    public $data = [];
    public function index(){
        $this->data['categoriesAll'] = $this->categories->getCategoriesWithProductCountAll();
        $this->data['brandsAll'] = $this->brands->brandsAll();
        $this->data['productsAll'] = $this->products->getAllProducts();
        $this->data['productCount'] = $this->products->getProductCountByCategory();
        foreach ($this->data['productsAll'] as $product) {
            $product->price_after_discount = $product->discount > 0
            ? $product->price - ($product->price * $product->discount / 100)
            : $product->price;
        }
        $this->data['title'] ='Shop';
        return view('clients.shop', $this->data);
    }
    public function search(Request $request){
        if ($request->ajax()) {
            $search = $request->get('search');
            $data = $this->products->getProductsSearch($search);
            foreach ($data as $product) {
                $product->price_after_discount = $product->discount > 0
            ? $product->price - ($product->price * $product->discount / 100)
            : $product->price;
            }
            $output = '';
            if ($data->count() > 0) {
                foreach ($data as $item) {
                    $output .= view('clients.partials.product_card', compact('item'))->render();
                }
            } else {
                $output = view('clients.partials.noproduct');
            }
            return $output;
        
        }
        // $this->data['categoriesAll'] = $this->categories->getCategoriesWithProductCountAll();
        // $this->data['brandsAll'] = $this->brands->brandsAll();
        // $this->data['productsAll'] = $this->products->getAllProducts();
        // foreach ($this->data['productsAll'] as $product) {
        //     $product->price_after_discount = $product->discount > 0
        //     ? $product->price - ($product->price * $product->discount / 100)
        //     : $product->price;
        // }
        // $this->data['title'] ='Shop';
        // return view('clients.shop', $this->data);
    }
}