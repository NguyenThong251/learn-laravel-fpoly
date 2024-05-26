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
        $productsAll = $this->data['productsAll'];
        $this->data['productCount'] = $productsAll->total();
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
            if ($data-> count() > 0) {
                foreach ($data as $item) {
                    $output .= view('clients.partials.product_card', compact('item'))->render();
                }
            } else {
                $output = view('clients.partials.noproduct');
            }
            return $output;
        
        }
    }
    public function filter(Request $request){
        if ($request->ajax()) {
            $categories = $request->get('categories');
            // $sortOptions = $request->input('sortOptions',[]);
            // $priceRange = $request->input('priceRange',[]);
            // $brands = $request->input('brands',[]);
            // dd($categories);
            // if (is_string($priceRange)) {
            //     $priceRangeParts = explode('-', $priceRange);
            //     if (count($priceRangeParts) == 2) {
            //         $priceRange = [
            //             'min' => (int)$priceRangeParts[0],
            //             'max' => (int)$priceRangeParts[1]
            //         ];
            //     } else {
            //         $priceRange = null;
            //     }
            // }
            $filteredData = $this->products
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->select('products.*', 'categories.name as category_name')
            ->where('products.hide', '=', 0)
            
            ->whereIn('categories.name', $categories)
            ->orderBy('products.id', 'desc')
            ->paginate(15);
            // , $sortOptions, $priceRange, $brands
            // , $sortOptions, $priceRange, $brands
            // $filteredData = $this->products->filterProducts($categories,$sortOptions, $priceRange, $brands);
            $output = '';
            if ($filteredData->count() > 0) {
                foreach ($filteredData as $item) {
                    $output .= view('clients.partials.product_card', compact('item'))->render();
                }
            } else {
                $output = view('clients.partials.noproduct');
            }
    
            return $output;

        }
    }
  }