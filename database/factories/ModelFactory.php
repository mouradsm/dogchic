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
    return [
        'name'           => $faker->name,
        'email'          => $faker->email,
        'password'       => str_random(10),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Cliente::class, function (Faker\Generator $faker) {
    return [
        'nome' => $faker->name,
    ];
});

$factory->define(App\Animal::class, function (Faker\Generator $faker) {
    return [
        'nome'  => $faker->firstNameMale,
        'raca'  => $faker->company,
        'porte' => $faker->randomElement(['P', 'M', 'G']),
        'cor'   => $faker->colorName,
        'idade' => $faker->randomElement(['A', 'F']),
        'obs'   => $faker->sentence(),
    ];
});

$factory->define(App\Endereco::class, function (Faker\Generator $faker) {
    return [
        'rua'       => $faker->streetName,
        'numero'    => $faker->buildingNumber,
        'cidade'    => $faker->city,
        'estado'    => $faker->stateAbbr,
        'cep'       => $faker->postcode,
        'latitude'  => $faker->latitude,
        'longitude' => $faker->longitude,
        'status'    => true
    ];
});


