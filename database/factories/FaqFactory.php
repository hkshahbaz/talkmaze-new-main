<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Faq;
use Faker\Generator as Faker;

$factory->define(Faq::class, function (Faker $faker) {
     return [
        'question' => $faker->text($maxNbChars = 100),
        'answer' => $faker->text($maxNbChars = 100),
    ];
});
