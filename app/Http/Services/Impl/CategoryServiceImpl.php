<?php


namespace App\Http\Services\Impl;


use App\Category;
use App\Http\Repositories\Interfaces\CategoryRepository;
use App\Http\Services\Interfaces\CategoryService;

class CategoryServiceImpl implements CategoryService
{

    protected $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function getAll()
    {
        return $this->categoryRepository->getAll();
    }

    public function findById($id)
    {
        // TODO: Implement findById() method.
    }

    public function create($data)
    {
        $category = new Category();
        $category->name = $data->name;
        $this->categoryRepository->create($category);
    }

    public function update($data, $object)
    {
        // TODO: Implement update() method.
    }

    public function destroy($object)
    {
        // TODO: Implement destroy() method.
    }
}
