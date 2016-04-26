<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class ProductCategory extends Model implements Transformable
{
    use TransformableTrait;

    protected $table = "products_categories";

    protected $fillable = ['name'];

}
