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

$factory->define(App\company::class, function(Faker\Generator $faker){

	return [
		'name'=> $faker->company.' '.$faker->companySuffix,
		'email'=>$faker->email,
		'password' => bcrypt('me'),
		'descrip' => $faker->sentence,
	];
});

// $job = \Faker\Factory::create()->jobTitle;
$factory->define(App\job::class, function(Faker\Generator $faker) {
	return [
		'company_id' => rand(1,3),
		'name' => $faker->jobTitle,
		'descrip' => $faker->sentence
	];
});

$factory->define(App\exam::class, function(Faker\Generator $faker) {
	return [
		'job_id' => rand(1,3),
		'title' => $faker->words(2,true)
		];
});

$factory->define(App\question::class, function(Faker\Generator $faker){
	return [
		'exam_id' => rand(1,3),
		'question'	=> $faker->sentence,
		// 'choices'	=> serialize($faker->words(4)),
		'choices'	=> $faker->words(4),
		'right_answer' => array_rand(['a','b','c','d'])
	];
});

$factory->define(App\applicant::class, function(Faker\Generator $faker){
	$gender = ['female', 'male'][rand(0,1)]; 
	return[
		'email' => $faker->unique()->email,
		'sex' => $gender,
		'f_name' => $gender == 'female' ? $faker->firstNameFemale : $faker->firstNameMale,
		'l_name' => $faker->lastName,
		'password' => bcrypt('me'),
		
	];
});

$factory->define(App\application::class, function(Faker\Generator $faker){

	return[
		'applicant_id' => rand(1,3),
		'job_id' => rand(1,3)
	];
});

$factory->define(App\admin::class, function(Faker\Generator $faker){

	return [
		'name'     =>  $faker->name,
		'email'    =>  $faker->email,
		'password' =>  bcrypt('me'),
	];
});