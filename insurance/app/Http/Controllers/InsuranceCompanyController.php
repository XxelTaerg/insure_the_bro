<?php
namespace App\Http\Controllers;
use App\Models\ProductCategory;
use App\Repositories\ProductsRepository;
use Hash;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\Product;


class InsuranceCompanyController extends Controller
{

    public function index()
    {
        $company = Auth::user();
        $products = $company->products;

        return view('insurance-company.index', ['products' => $products]);
    }

    public function insertProduct()
    {
        $productCategories = ProductCategory::all();

        return view('insurance-company.insert-product', ['productCategories' => $productCategories]);

    }
}
