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
        $prepareData = [
            'id' => null,
            'name' => $data['name'],
            'percent' => $data['percent'],
            'period' => $data['period'],
            'company_id' => auth()->user()->id,
            'category_id' => $data['category_id']
        ];
        $product = new Product();

        return $this->saveProductToDB($prepareData, $product);
    }

    /**
     * Обновление продукта
     *
     * @return mixed
     */
    public function updateProduct(int $id, array $data)
    {
        $prepareData = [
            'name' => $data['name'],
            'percent' => $data['percent'],
            'period' => $data['period'],
            'category_id' => $data['category_id']
        ];
        $product = Product::query()
            ->where('company_id', auth()->user()->id)
            ->where('id', $id)
            ->first();

        return $this->saveProductToDB($prepareData, $product);
    }

    /**
     * Метод сохранения данных в базу
     *
     * @param $prepareData
     * @param $product
     * @return mixed
     */
    private function saveProductToDB($prepareData, $product) {
        $product = $product->fill($prepareData);
        $product->save();

        return $product;
    }

    /**
     * Удаление продукта
     *
     * @param int $id
     * @return void
     */
    public function deleteProduct(int $id) {
        Product::query()
            ->where('company_id', auth()->user()->id)
            ->where('id', $id)
            ->delete();
    }
}
