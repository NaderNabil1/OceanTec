<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'title',
        'description',
        'image',
        'category',
        'price',
        'slug',
    ];

    public function Category(){
        return $this->belongsTo(Category::class, 'category');
    }
}
