<?php

namespace App\Services;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Repositories\ProductsRepository;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class MainService extends BaseService
{
    /**
     * Список всех категорий
     *
     * @return Collection|\Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model|ProductCategory[]|null
     */
    public function findProduct($id)
    {
        return Product::query()->find($id);
    }

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
