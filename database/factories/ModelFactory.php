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
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
        'age' => $faker->numberBetween(18, 100),
        'city' => $faker->city,
        'company' => $faker->company,
    ];
});

$factory->define(App\Event::class, function (Faker\Generator $faker) {

    $startsAt = \Carbon\Carbon::create(2016, rand(1,12), rand(1, 28), rand(9, 16), 0, 0);

    return [
        'name' => $faker->word . ' event',
        'city' => $faker->city,
        'starts_at' => $startsAt,
        'finishes_at' => $startsAt->addHour()
    ];
});

$factory->define(App\Rsvp::class, function (Faker\Generator $faker) {

    return [
        'user_id' => factory(App\User::class)->create()->id,
        'event_id' => factory(App\Event::class)->create()->id,
        'responded_at' => $faker->time('Y-m-d H:i:s'),
        'response' => array_rand(['I will be attending', 'I cannot attend', 1]),
    ];
});