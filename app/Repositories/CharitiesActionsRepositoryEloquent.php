<?php

namespace App\Repositories;

use App\Entities\CharityAction;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Entities\CharitiesActions;
use App\Validators\CharitiesActionsValidator;

/**
 * Class CharitiesActionsRepositoryEloquent
 * @package namespace App\Repositories;
 */
class CharitiesActionsRepositoryEloquent extends BaseRepository implements CharitiesActionsRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return CharityAction::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
