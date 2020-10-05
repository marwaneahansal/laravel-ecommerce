<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ShopController extends Controller
{
    public function index() {
        $products =  Product::SimplePaginate(5);
        dump($products);
        return view('shop.index', ['products' => $products]);
    }



    public function show($name) {
        $name = str_replace('-', ' ', $name);
        $product = Product::where('name', $name)->firstOrFail();
        $recommandedProducts = Product::where('name', '!=', $name)->get()->random(4);
        // dd($recommandedProducts);
        return view('shop.show', ['product' => $product, 'recProducts' => $recommandedProducts]);
    }
}
