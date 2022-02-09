<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'percent', 'period', 'company_id', 'category_id'];

    public function insuranceCompany()
    {
        return $this->hasOne(InsuranceCompany::class);
    }
    public function category()
    {
        return $this->hasOne(ProductCategory::class);
    }
}
