<?php

namespace App\Http\Controllers;


use Illuminate\Contracts\Container\BindingResolutionException;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('index.index');

    }

}
