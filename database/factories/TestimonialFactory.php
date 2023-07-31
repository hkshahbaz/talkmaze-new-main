<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Testimonial;
use Faker\Generator as Faker;

$factory->define(Testimonial::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'feedback' => $faker->text($maxNbChars = 100),
        'image' => $faker->imageUrl($width = 640, $height = 480),
    ];
});
