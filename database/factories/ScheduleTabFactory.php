<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Schedule;
use Faker\Generator as Faker;

$factory->define(Schedule::class, function (Faker $faker) {
    return [
      'owner_id' => function(){
        (App\User::class)->create()->id;
      },
      'title'    => $faker->sentence
    ];
});
