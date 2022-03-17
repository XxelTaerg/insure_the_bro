<?php

namespace App\Services;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Database\Eloquent\Collection;

class BaseService
{
    /**
     * Количество строк в таблице
     * @var int
     */
    protected $paginationCount;

    public function __construct()
    {
        $this->paginationCount = config('pagination.count') ?: 10;
    }

    /**
     * Список всех категорий
     *
     * @return ProductCategory[]|Collection
     */
    public function getAllCategories()
    {
        return ProductCategory::all();
    }

    /**
     * Получение товара по id
     *
     * @return Collection|\Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model|ProductCategory[]|null
     */
    public function getProductById($id)
    {
        return Product::query()->find($id);
    }
}
