<?php

use Faker\Generator as Faker;

$factory->define(App\Question::class, function (Faker $faker) {
    return [
        'title' => rtrim($faker->sentence(random_int(5, 10)), '.'),
        'body' => $faker->paragraphs(random_int(3, 7), true),
        'views' => random_int(0, 10),
        // 'answers_count' => rand(0, 10),
        //'votes_count' => random_int(-3, 10)
    ];
});
