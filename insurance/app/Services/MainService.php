<?php

namespace App\Services;

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
}
