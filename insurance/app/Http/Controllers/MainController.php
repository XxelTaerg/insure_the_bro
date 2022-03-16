<?php

namespace App\Http\Controllers;

use App\Repositories\ProductsRepository;
use App\Services\MainService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;


class MainController extends Controller
{
    /**
     * Страница списка всех товаров
     *
     * @param Request $request
     * @param MainService $service
     * @param ProductsRepository $productsRepository
     * @return Application|Factory|View
     */
    public function index(Request $request, MainService $service, ProductsRepository $productsRepository)
    {
        $products = $service->getProducts($request, $productsRepository);
        $categories = $service->getAllCategories();

        return view('welcome', ['products' => $products, 'productCategories' => $categories]);
    }

    /**
     * Страница таблицы товаров для конкретной категории
     *
     * @param int $categoryId
     * @param MainService $service
     * @return Application|Factory|View
     */
    public function getProductsByCategory(int $categoryId, MainService $service)
    {
        $products = $service->getProductsByCategory($categoryId);
        $categories = $service->getAllCategories();

        return view('welcome', ['products' => $products, 'productCategories' => $categories]);

    }

    /**
     * Страница отклика
     *
     * @param int $productId
     * @param MainService $service
     * @return Application|Factory|View
     */
    public function showFeedback(int $productId, MainService $service)
    {
        return view('send-feedback', ['product' => $service->getProductById($productId)]);
    }

    /**
     * Страница отклика
     *
     * @param int $productId
     * @param MainService $service
     * @return Application|Factory|View
     */
    public function sendFeedback(int $productId, MainService $service)
    {
        $service->sendFeedback($productId, );
        return view('send-feedback', ['product' => $service->getProductById($productId)]);
    }
}
