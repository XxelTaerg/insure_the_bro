<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use App\Models\Traits\Searchable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, Filterable, Searchable;

    protected $fillable = ['name', 'percent', 'period', 'company_id', 'category_id'];

    public function insuranceCompany()
    {
        return $this->belongsTo(InsuranceCompany::class, 'company_id');
    }

    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'category_id');
    }
}


