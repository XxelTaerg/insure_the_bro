<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class InsuranceCompanyService extends BaseService
{
    /**
     * Все продукты компании
     *
     * @return mixed
     */
    public function getProducts()
    {
        return Auth::user()
            ->products()
            ->with('category')
            ->paginate($this->paginationCount);
    }

    /**
     * Создание продукта
     *
     * @return mixed
     */
    public function saveProduct(array $data)
    {
        return Product::query()->create([
            'name' => $data['name'],
            'percent' => $data['percent'],
            'period' => $data['period'],
            'company_id' => auth()->user()->id,
            'category_id' => $data['category_id']
        ]);
    }

    /**
     * Обновление продукта
     *
     * @return mixed
     */
    public function updateProduct(int $id, array $data)
    {
        return Product::query()
            ->find($id)
            ->update([
                'name' => $data['name'],
                'percent' => $data['percent'],
                'period' => $data['period'],
                'category_id' => $data['category_id']
            ]);
    }
}
