<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Test;
use Faker\Generator as Faker;

$factory->define(Test::class, function (Faker $faker) {

    return [
        'title' => $faker->word,
        'body' => $faker->text,
        'email' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
