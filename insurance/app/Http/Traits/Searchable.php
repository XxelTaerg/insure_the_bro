<?php

namespace App\Http\Traits;


use App\Models\InsuranceCompany;
use App\Search\ElasticsearchObserver;

trait Searchable
{
    public static function bootSearchable()
    {
        // Это облегчает переключение флага поиска.
        // Будет полезно позже при развертывании
        // новой поисковой системы в продакшене
        if (config('services.search.enabled')) {
            static::observe(ElasticsearchObserver::class);
        }
    }
    public function getSearchIndex()
    {
        return $this->getTable();
    }
    public function getSearchType()
    {
        if (property_exists($this, 'useSearchType')) {
            return $this->useSearchType;
        }
        return $this->getTable();
    }
    public function toSearchArray()
    {
        $data = $this->toArray();
        $data['name_company'] = $this->insuranceCompany->name;

        return $data;
    }
}
