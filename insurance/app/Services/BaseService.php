<?php

namespace App\Services;

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
        $this->paginationCount = config('pagination.products.count') ?: 10;
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
}
