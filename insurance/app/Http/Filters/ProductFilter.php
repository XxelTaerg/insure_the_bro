<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class ProductFilter extends AbstractFilter
{
    public const COMPANIES = 'companies';
    public const PERIOD = 'period';
    public const PERCENT = 'percent';
    public const SORT = 'sort';


    protected function getCallbacks(): array
    {
        return [
            self::COMPANIES => [$this, 'companies'],
            self::PERIOD => [$this, 'period'],
            self::PERCENT => [$this, 'percent'],
            self::SORT => [$this, 'sort'],
        ];
    }

    /**
     * Фильтр по компании
     *
     * @param Builder $builder
     * @param $value
     * @return void
     */
    public function companies(Builder $builder, $value)
    {
        $builder->whereHas('insuranceCompany', function ($q) use ($value) {
            $q->whereIn('insurance_companies.id', (array)$value);
        });
    }

    /**
     * Фильтр по сроку
     *
     * @param Builder $builder
     * @param $value
     * @return void
     */
    public function period(Builder $builder, $value)
    {
        $from = $value['from'] ?? null;
        $to = $value['to'] ?? null;

        $builder
            ->when(!is_null($from), function ($q) use ($from) {
                $q->where('period', '>=', $from);
            })
            ->when(!is_null($to), function ($q) use ($to) {
                $q->where('period', '<=', $to);
            });
    }

    /**
     * Фильтр по проценту
     *
     * @param Builder $builder
     * @param $value
     * @return void
     */
    public function percent(Builder $builder, $value)
    {
        $from = $value['from'] ?? null;
        $to = $value['to'] ?? null;

        $builder
            ->when(!is_null($from), function ($q) use ($from) {
                $q->where('percent', '>=', $from);
            })
            ->when(!is_null($to), function ($q) use ($to) {
                $q->where('percent', '<=', $to);
            });
    }

    /**
     * Сортировка
     *
     * @param Builder $builder
     * @param $value
     * @return void
     */
    public function sort(Builder $builder, $value)
    {
        $value = explode('-', $value);
        $column = $value[0];
        $direction = $value[1];

        switch ($column) {
            case 'name':
            case 'period':
            case 'percent':
                $builder->orderBy($column, $direction);
                break;
            case 'company':
                $builder
                    ->join('insurance_companies', 'insurance_companies.id', '=', 'products.company_id')
                    ->orderBy('insurance_companies.name', $direction);
                break;
            case 'default':
                $builder->orderBy('name', 'asc');
        }
    }
}
