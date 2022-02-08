<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $model = new Category();
        $category = $model->getCategories();


        return view('news.categories', [
            'category' => $category
        ]);
    }
}
