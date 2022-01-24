<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $category = $this->getCategory();

        return view('news.category', [
            'category' => $category
        ]);
    }
}
