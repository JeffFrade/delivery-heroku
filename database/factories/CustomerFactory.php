<?php

use Faker\Generator as Faker;

//Criando uma Factory:
$factory->define(Charlie\Customer::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'city' => $faker->city,
        'state' => $faker->stateAbbr,
        'birthdate' => $faker->dateTime(),
        'special_customer' => $faker->boolean
    ];
});
