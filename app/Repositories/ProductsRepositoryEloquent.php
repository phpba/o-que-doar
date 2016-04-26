<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\ProductsRepository;
use App\Entities\Products;
use App\Validators\ProductsValidator;

/**
 * Class ProductsRepositoryEloquent
 * @package namespace App\Repositories;
 */
class ProductsRepositoryEloquent extends BaseRepository implements ProductsRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Products::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
