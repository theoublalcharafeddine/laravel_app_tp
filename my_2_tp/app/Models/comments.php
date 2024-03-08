<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $fillable = ['user_id', 'produit_id', 'content'];

    public function product()
    {
        return $this->belongsTo(Product::class, 'produit_id');
    }
}
