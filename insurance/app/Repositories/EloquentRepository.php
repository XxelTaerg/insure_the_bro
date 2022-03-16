<?php

namespace App\Repositories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;

class EloquentRepository implements ProductsRepository
{
    /**
     * ПОиск через sql запрос
     *
     * @param string $query
     * @return Builder
     */
    public function search(string $query = ''): Builder
    {
        return Product::query()
            ->where('name', 'like', "%{$query}%");
    }
}
