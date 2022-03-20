<?php

namespace App\Services;

use App\Models\Product;
use App\Models\InsuranceCompany;
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

    /**
     * @param bool $withProducts
     * @return array|\Illuminate\Database\Eloquent\Builder[]|Collection
     */
    public function getInsuranceCompanies(bool $withProducts = false)
    {
        return InsuranceCompany::query()
            ->when($withProducts, function ($q) {
                $q->has('products');
            })
            ->get();
    }

    /**
     * Получение товара по id
     *
     * @return string[]
     */
    public function getSorts()
    {
        return [
            'name' => 'Название',
            'company' => 'Компания',
            'period' => 'Срок',
            'percent' => 'Процент',
        ];
    }
}
