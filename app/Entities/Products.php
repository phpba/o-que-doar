<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Products extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = ['name', 'products_category_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category()
    {
        return $this->hasOne(ProductsCategories::class, 'products_category_id');
    }

}
