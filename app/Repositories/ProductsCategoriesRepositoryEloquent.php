<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\ProductsCategoriesRepository;
use App\Entities\ProductsCategories;
use App\Validators\ProductsCategoriesValidator;

/**
 * Class ProductsCategoriesRepositoryEloquent
 * @package namespace App\Repositories;
 */
class ProductsCategoriesRepositoryEloquent extends BaseRepository implements ProductsCategoriesRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ProductsCategories::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
