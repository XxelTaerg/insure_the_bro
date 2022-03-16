<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\SaveProductRequest;
use App\Services\InsuranceCompanyService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class InsuranceCompanyController extends Controller
{
    /**
     * Таблица всех продуктов компании
     *
     * @param InsuranceCompanyService $service
     * @return Application|Factory|View
     */
    public function index(InsuranceCompanyService $service)
    {
        $products = $service->getProducts();

        return view('insurance-company.index', ['products' => $products]);
    }

    /**
     * Страница добавления продукта
     *
     * @return Application|Factory|View
     */
    public function insertProduct(InsuranceCompanyService $service)
    {
        $categories = $service->getAllCategories();

        return view('insurance-company.insert-product', ['productCategories' => $categories]);
    }

    /**
     * Создание нового продукта
     *
     * @return Application|Factory|View
     */
    public function saveProduct(SaveProductRequest $request, InsuranceCompanyService $service)
    {
        $product = $service->saveProduct($request->validated());
        $categories = $service->getAllCategories();

        return view('insurance-company.insert-product', ['productCategories' => $categories, 'product' => $product]);
    }

    /**
     * Обновление продукта
     *
     * @return Application|Factory|View
     */
    public function updateProduct(int $id, SaveProductRequest $request, InsuranceCompanyService $service)
    {
        $product = $service->updateProduct($id, $request->validated());
        $categories = $service->getAllCategories();

        return view('insurance-company.insert-product', ['productCategories' => $categories, 'product' => $product]);
    }
}
