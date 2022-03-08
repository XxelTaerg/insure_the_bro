<?php

namespace App\Repositories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

class EloquentRepository implements ProductsRepository
{
    /**
     * ПОиск через sql запрос
     *
     * @param string $query
     * @return Collection
     */
    public function search(string $query = ''): Collection
    {
        return Product::query()
            ->where('name', 'like', "%{$query}%")
            ->get();
    }
}
