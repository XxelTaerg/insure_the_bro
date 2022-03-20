<?php


namespace App\Models\Traits;


use App\Http\Filters\ProductFilter;
use Illuminate\Database\Eloquent\Builder;

trait Filterable
{
    /**
     * @param Builder $builder
     * @param array $data
     * @return Builder
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function scopeFilter(Builder $builder, array $data)
    {
        app()->make(ProductFilter::class, ['queryParams' => $data])->apply($builder);

        return $builder;
    }
}
