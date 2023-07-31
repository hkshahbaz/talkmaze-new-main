<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
    	'parent_id' => rand(1,5),
        'name' => $faker->name,
    ];
});
