<?php

use Faker\Generator as Faker;
use App\Heirachy;

$factory->define(Heirachy::class, function (Faker $faker) {
    return [
        'heirachy_group_id'=>1,
        'rank' => $faker->numberBetween(0,7),
        'position_name' => $faker->name,
        'position_slang' => $faker->name,
        'person_name' => $faker->name,
        'user_id'=>1,
    ];
});
