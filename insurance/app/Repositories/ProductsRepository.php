<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Builder;

interface ProductsRepository
{
    public function search(string $query = ''): Builder;
}
