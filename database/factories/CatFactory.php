<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Cat;

$factory->define(Cat::class, function (Faker $faker) {
    return [
      "name" => $faker -> firstName,
      "race" => $faker -> colorName,
      "cat_rfid" => $faker -> swiftBicNumber,

    ];
});
