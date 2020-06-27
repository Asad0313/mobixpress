<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Product;


$factory->define(Model::class, function (Faker $faker) {
    return [
        //

        factory(User::class)->create(),
    factory(User::class)->make()


    ];
});
