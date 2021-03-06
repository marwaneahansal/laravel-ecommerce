<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ShopController extends Controller
{
    public function index() {
        $products =  Product::Paginate(5);
        return view('shop.index', ['products' => $products]);
    }



    public function show($name) {
        $name = str_replace('-', ' ', $name);
        $product = Product::where('name', $name)->firstOrFail();
        $recommandedProducts = Product::where('name', '!=', $name)->get()->random(4);
        return view('shop.show', ['product' => $product, 'recProducts' => $recommandedProducts]);
    }

    public function search(Request $request) {
        $searchQuery = $request->input('searchQuery');
        $products = Product::where('name', 'like', "%".$searchQuery."%")->Paginate(5);
        return view('shop.search', ['products' => $products]);
    }

    public function applyPriceFilter(Request $request) {
        $minPrice = $request->input('minPrice');
        $maxPrice = $request->input('maxPrice');
        if($minPrice != 0 || $maxPrice != 0) {
            if(!$minPrice) $minPrice = 0;
            if(!$maxPrice) $maxPrice = Product::max('price');
            $products = Product::whereBetween('price', [$minPrice, $maxPrice] )->Paginate(5);
            return view('shop.index', ['products' => $products]);
        } 
    }
}
