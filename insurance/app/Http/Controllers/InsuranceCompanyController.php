<?php

namespace App\Http\Controllers;

use App\Http\Requests\InsuranceCompany\SaveProductRequest;
use App\Services\InsuranceCompanyService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

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
    public function insertProductForm(InsuranceCompanyService $service)
    {
        $categories = $service->getAllCategories();

        return view('insurance-company.product', ['productCategories' => $categories]);
    }

    /**
     * Создание нового продукта
     *
     * @return string
     */
    public function saveProduct(SaveProductRequest $request, InsuranceCompanyService $service)
    {
        $product = $service->saveProduct($request->validated());

        return route('account.product-update-form', ['product_id' => $product->id]);
    }

    /**
     * Обновление продукта
     *
     * @return Application|Factory|View
     */
    public function updateProductForm(int $id, InsuranceCompanyService $service)
    {
        $product = $service->getProductById($id);
        $categories = $service->getAllCategories();

        return view('insurance-company.product', ['productCategories' => $categories, 'product' => $product]);
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

        return view('insurance-company.product', ['productCategories' => $categories, 'product' => $product]);
    }

    /**
     * Обновление продукта
     *
     * @return RedirectResponse
     */
    public function deleteProduct(int $id, InsuranceCompanyService $service)
    {
        $service->deleteProduct($id);

        return redirect()->back();
    }

    /**
     * Список отликов на продукты компании
     *
     * @return Application|Factory|View
     */
    public function showFeedbacks(InsuranceCompanyService $service)
    {
        $feedbacks = $service->getFeedbacks();

        return view('insurance-company.feedback', ['feedbacks' => $feedbacks]);
    }
}
