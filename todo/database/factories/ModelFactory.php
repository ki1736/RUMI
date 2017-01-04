<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];

});



$factory->define(App\Project::class, function (Faker\Generator $faker) {
    $min = App\User::min('id');
    $max = App\User::max('id');

    return [
        'user_id' => $faker->numberBetween($min, $max),
        'name'  => substr($faker->word, 0, 20),
        'description' => $faker->sentence,
        'created_at' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = '-1 years'),
        'updated_at' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = '-1 years'),
    ];
});


$factory->define(App\Task::class, function (Faker\Generator $faker) {
    $min = App\Project::min('id');
    $max = App\Project::max('id');

    $dt = $faker->dateTimeBetween($startDate = '-1 months', $endDate = 'now');

    return [
        'project_id' => $faker->numberBetween($min, $max),
        'name'  => substr($faker->word, 0, 20),
        'description' => $faker->sentence,
        'due_date'  => $faker->dateTimeBetween($startDate = '-1 months', $endDate = '+1 months'),
        'created_at' => $dt,
        'updated_at' => $dt,
    ];
});
