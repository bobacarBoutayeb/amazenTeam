<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    protected $fillable = ['name', 'description', 'price', 'discount', 'weight', 'url_image', 'quantity', 'available', 'categories_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
