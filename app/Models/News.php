<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';

    public function getNews(int $category_id): array
    {
        return \DB::table($this->table)
            ->select(['id', 'title', 'slug',  'source', 'status', 'description'])
            ->where('category_id', $category_id)
            ->get()
            ->toArray();
    }

    public function getNewsById(int $id)
    {
        return \DB::table($this->table)->find($id);
    }
}
