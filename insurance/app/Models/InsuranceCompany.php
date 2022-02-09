<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsuranceCompany extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone', 'address', 'password'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
