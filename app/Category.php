<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    const CREATED_AT = null;
    const UPDATED_AT = null;

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
