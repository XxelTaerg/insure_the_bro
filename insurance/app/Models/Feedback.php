<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'feedbacks';

    /**
     * @var string[]
     */
    protected $fillable = ['name', 'email', 'comment', 'product_id', 'is_sent'];

    protected $casts = [
        'is_sent' => 'boolean'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
