<?php

namespace App\Http\Controllers;

use App\Repositories\ProductsCategoriesRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    /**
     * @var ProductsCategoriesRepository
     */
    protected $repository;

    public function __construct(ProductsCategoriesRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return mixed
     */
    public function index()
    {
        return $this->repository->all();
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function create(Request $request)
    {
        return $this->repository->create($request->all());
    }

    /**
     * @param $id
     * @return JsonResponse
     */
    public function destroy($id)
    {
        if($this->repository->delete($id)) {
            return new JsonResponse(['success' => true]);
        }

        return new JsonResponse(['success' => false]);
    }

    /**
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function update(Request $request, $id)
    {
        return $this->repository->update($request->all(), $id);
    }
}
