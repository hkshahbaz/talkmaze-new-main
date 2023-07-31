<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\SocialLink;
use Faker\Generator as Faker;

$factory->define(SocialLink::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'link' => $faker->text($maxNbChars = 100),
        'image' => $faker->imageUrl($width = 640, $height = 480),
    ];
});
