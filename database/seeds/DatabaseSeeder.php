<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

    	factory(App\company::class, 3)->create()->each(function ($u){
    		$u->jobs()->saveMany(factory(App\job::class, 5)->create());
    	});
    factory(App\applicant::class, 7)->create();
    	// factory(App\job::class, 15)->create();
    	// factory(App\company::class,3)->create();
    }
}
