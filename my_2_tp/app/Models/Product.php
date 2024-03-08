<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    protected $table = 'produits';

    protected $fillable = ['name', 'description', 'price'];

    public static function getAllProducts()
    {
        return self::all();
    }

    public function comments()
    {
        return $this->hasMany(Comments::class, 'produit_id');
    }
}
