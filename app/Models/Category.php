<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'title',
        'description',
        'image',
        'slug',
    ];

    public function Products(){
        return $this->hasMany(Product::class);
    }

}
