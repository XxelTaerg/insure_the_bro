<?php

namespace App\Repositories;

use App\Models\Product;
use Elasticsearch\Client;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Arr;

class ElasticsearchRepository implements ProductsRepository
{
    /** @var \Elasticsearch\Client */
    private $elasticsearch;
    public function __construct(Client $elasticsearch)
    {
        $this->elasticsearch = $elasticsearch;
    }
    public function search(string $query = ''): Builder
    {
        $items = $this->searchOnElasticsearch($query);
        return $this->buildCollection($items);
    }
    private function searchOnElasticsearch(string $query = ''): array
    {
        $model = new Product;
        return $this->elasticsearch->search([
            'index' => $model->getSearchIndex(),
            'type' => $model->getSearchType(),
            'body' => [
                'query' => [
                    'multi_match' => [
                        'fields' => ['name','name_company'],
                        'query' => $query,
                    ],
                ],
            ],
        ]);
    }
    private function buildCollection(array $items): Builder
    {
        $ids = Arr::pluck($items['hits']['hits'], '_id');
        return Product::query()->whereIn('id', $ids)->orderBy('id');
    }
}
