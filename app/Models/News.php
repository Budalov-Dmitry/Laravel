<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Builder;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';

    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'source',
        'status',
        'description'
    ];

    public function getNews(int $category_id): array
    {
        return \DB::table($this->table)
            ->select(['id', 'title', 'slug',  'source', 'status', 'description'])
            ->where('category_id', $category_id)
            ->get()
            ->toArray();
    }

    public function getAdminNews(): array
    {
        return \DB::table($this->table)
            ->select(['id', 'title', 'slug',  'source', 'status', 'description'])
            ->get()
            ->toArray();
    }

    public function getNewsById(int $id)
    {
        return \DB::table($this->table)->find($id);
    }
}
