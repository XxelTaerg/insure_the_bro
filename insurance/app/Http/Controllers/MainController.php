<?php
namespace App\Http\Controllers;
use App\Models\ProductCategory;
use Hash;
use Session;
use App\Models\Product;


class MainController extends Controller
{

    public function index()
    {
        $products = Product::all();
        $productCategories = ProductCategory::all();

        return view('welcome', ['products' => $products, 'productCategories' => $productCategories]);
    }

    public function categories($categoryId)
    {
        $productCategories = ProductCategory::all();
        $products = Product::where('category_id', $categoryId)
        ->get();

        return view('welcome', ['products' => $products, 'productCategories' => $productCategories]);

    }

}
