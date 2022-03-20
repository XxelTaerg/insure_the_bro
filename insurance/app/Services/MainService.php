<?php

namespace App\Services;

use App\Jobs\FeedbackJob;
use App\Models\Product;
use App\Repositories\ProductsRepository;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class MainService extends BaseService
{
    /**
     * @param array $data
     * @param ProductsRepository $productsRepository
     * @return LengthAwarePaginator
     */
    public function getProducts(array $data, ProductsRepository $productsRepository)
    {
        return isset($data['search'])
            ? $productsRepository->search($data['search'])->paginate($this->paginationCount)
            : Product::query()->filter($data)->paginate($this->paginationCount);
    }

    /**
     * @param $categoryId
     * @param array $data
     * @return LengthAwarePaginator
     */
    public function getProductsByCategory($categoryId, array $data)
    {
        return Product::query()
            ->where('category_id', $categoryId)
            ->filter($data)
            ->paginate($this->paginationCount);
    }

    /**
     * @param int $productId
     * @param array $data
     * @return bool
     */
    public function sendFeedback(int $productId, array $data)
    {
        FeedbackJob::dispatch($productId, $data)->onQueue('emails');;

        return true;
    }
}
