<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

use App\Product;

$factory->define(Product::class, function (Faker $faker) {
    return [
        //
        'pro_name' => $faker->name,
        'pro_code' => $faker->numberBetween(),
        'pro_price' => $faker->numberBetween(),
        'pro_info' => $faker->name,
        'spl_price'=>$faker->numberBetween(),
        'categories'=>$faker->text,
        'brands'=>$faker->name

    ];
});
