<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Faker\Factory;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getCategory(): array
    {
        $faker = Factory::create();

        $category = [];

        for($i = 1; $i <= 5; $i++) {
            $category[] = [
                'id'    => $i,
                'title' => $faker->jobTitle(),
            ];
        }
        return $category;
    }

    public function getNews(): array
    {
        $faker = Factory::create();

        $category = $this->getCategory();



        $news = [];

        for($i = 1; $i < 5; $i++) {
            $news[] = [
                'id'    => $i,
                'category' => $category[$i],
                'title' => $faker->jobTitle(),
                'description' => $faker->text(205),
                'source' => $faker->userName()
            ];
        }

        return $news;
    }

    public function getNewsById(int $id): array
    {
        $faker = Factory::create();

        return [
            'id'    => $id,
            'title' => $faker->jobTitle(),
            'description' => $faker->text(205),
            'source' => $faker->userName()
        ];
    }
}
