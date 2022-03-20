<?php

namespace App\Http\Controllers;

use App\Http\Requests\Feedback\SendFeedbackRequest;
use App\Http\Requests\Product\FilterProductRequest;
use App\Repositories\ProductsRepository;
use App\Services\MainService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;


class MainController extends Controller
{
    /**
     * Страница списка всех товаров
     *
     * @param FilterProductRequest $request
     * @param MainService $service
     * @param ProductsRepository $productsRepository
     * @return Application|Factory|View
     */
    public function index(FilterProductRequest $request, MainService $service, ProductsRepository $productsRepository)
    {
        $products = $service->getProducts($request->validated(), $productsRepository);
        $productCategories = $service->getAllCategories();
        $insuranceCompanies = $service->getInsuranceCompanies(true);
        $sorts = $service->getSorts();

        return view('welcome', compact(['products', 'productCategories', 'insuranceCompanies', 'sorts']));
    }

    /**
     * Страница таблицы товаров для конкретной категории
     *
     * @param int $categoryId
     * @param FilterProductRequest $request
     * @param MainService $service
     * @return Application|Factory|View
     */
    public function getProductsByCategory(int $categoryId, FilterProductRequest $request, MainService $service)
    {
        $products = $service->getProductsByCategory($categoryId, $request->validated());
        $productCategories = $service->getAllCategories();
        $insuranceCompanies = $service->getInsuranceCompanies(true);
        $sorts = $service->getSorts();

        return view('welcome', compact(['products', 'productCategories', 'insuranceCompanies', 'sorts']));

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
    public function sendFeedback(int $productId, SendFeedbackRequest $request, MainService $service)
    {
        $isSend = $service->sendFeedback($productId, $request->validated());

        return view('send-feedback', ['product' => $service->getProductById($productId)])->with('isSend', $isSend);
    }
}
