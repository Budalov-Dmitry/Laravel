<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index(int $id)
    {
        $model = new News();
        $news = $model->getNews($id);
        //$news = $model->getNews($_GET['id']);


        return view('news.index', [
            'news' => $news
        ]);
    }

    public function show(int $id)
    {
        $model = new News();
        $news = $model->getNewsById($id);

        return view('news.show', [
            'newsItem' => $news
        ]);
    }
}
