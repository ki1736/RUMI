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
    ];
});

$factory->define(App\Project::class, function (Faker\Generator $faker) {
	$min = App\User::min('id');
	$max = App\User::max('id');

    return [
        'user_id' => $faker->numberBetween($min,$max), //User xpdlqmfdml ID값 기준으로 생성함
        'name' => $faker->word, //문자열 데이터 임으로 생성 
        'created_at' => $faker->dateTimeBetween($startDate = '-2years', $endDate = '-1years'),
        'updated_at' => $faker->dateTimeBetween($startDate = '-2years', $endDate = '-1years'),

    ];
});


$factory->define(App\Task::class, function (Faker\Generator $faker) {
    $min = App\Project::min('id');
    $max = App\Project::max('id');

    return [
        'project_id' => $faker->numberBetween($min,$max),
        'name' => $faker->word,
        'description' => $faker->text,
        'created_at' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = '-1 years'),
        'updated_at' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = '-1 years'),
    ];
});
