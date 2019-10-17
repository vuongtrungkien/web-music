<?php

namespace App\Http\Controllers;

use App\Http\Services\Interfaces\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;

    }

    public function showPageAddCategory()
    {
        return view('admin.category.add');
    }

    public function storeCategory(Request $request)
    {
        $this->categoryService->create($request);
        return back();
    }

}
