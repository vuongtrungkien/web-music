<?php


namespace App\Http\Repositories\Impl;


use App\Category;
use App\Http\Repositories\Interfaces\CategoryRepository;

class CategoryRepositoryImpl implements CategoryRepository
{
    protected $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }


    public function getAll()
    {
        return $this->category->all();
    }

    public function findById($id)
    {
        // TODO: Implement findById() method.
    }

    public function create($data)
    {
        // TODO: Implement create() method.
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
