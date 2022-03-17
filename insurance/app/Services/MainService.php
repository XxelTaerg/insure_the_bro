<?php

namespace App\Services;

use App\Models\Feedback;
use App\Models\Product;
use App\Repositories\ProductsRepository;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;

class MainService extends BaseService
{
    /**
     * @param Request $request
     * @param ProductsRepository $productsRepository
     * @return LengthAwarePaginator
     */
    public function getProducts(Request $request, ProductsRepository $productsRepository)
    {
        return $request->has('search')
            ? $productsRepository->search(request('search'))->paginate($this->paginationCount)
            : Product::paginate($this->paginationCount);
    }

    /**
     * @param $categoryId
     * @return LengthAwarePaginator
     */
    public function getProductsByCategory($categoryId)
    {
        return Product::query()
            ->where('category_id', $categoryId)
            ->paginate($this->paginationCount);
    }

    /**
     * @param int $productId
     * @param array $data
     * @return bool
     */
    public function sendFeedback(int $productId, array $data)
    {
        $prepareData = [
            'name' => $data['name'],
            'email' => $data['email'],
            'comment' => $data['comment'] ?? '',
            'product_id' => $productId,
            'is_sent' => false
        ];

        $feedback = new Feedback();
        $feedback->fill($prepareData);
        $feedback->save();

        $mailService = new MailService();
        return $mailService->sendFeedback($feedback);
    }
}
