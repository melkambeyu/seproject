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

/** @var \Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\job::class, function(Faker\Generator $faker){

	return [
	'company_id' => rand(1,3),
	'name' => $faker->name,
	'descrip' => $faker->sentence
	];
});

$factory->define(App\company::class, function(Faker\Generator $faker){

	return [
		'name'=> $faker->name,
		'email'=>$faker->email,
		'password' => bcrypt('asdfasdf'),
		'phone' => $faker->phoneNumber,
		'descrip' => $faker->sentence,
		'address' => $faker->address
	];
});

$factory->define(App\applicant::class, function(Faker\Generator $faker){
	$gender = ['female', 'male'][rand(0,1)]; 
	return[
		'email' => $faker->unique()->email,
		'sex' => $gender,
		'f_name' => $gender == 'female' ? $faker->firstNameFemale : $faker->firstNameMale,
		'l_name' => $faker->lastName,
		'password' => bcrypt('maximus'),
		'phone' => $faker->phoneNumber,
		'address' => $faker->address
	];
});
