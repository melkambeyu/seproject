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

    	factory(App\company::class, 5)->create()->each(function ($c){
            
            $c->jobs()->saveMany(factory(App\job::class, 6)->create()

                ->each(function($j){
            
                    factory(App\applicant::class, 6)->create()
                        ->each(function($a) use($j){

                            // $apply = factory(App\application::class, 3)->create();
                            // $a->applications()->saveMany($apply);
                            // $j->applications()->saveMany($apply);
                            $j->applicants()->attach($a);
                        });
                        $exam = factory(App\exam::class, 1)->create();
                        $j->exam()->save($exam);
            
            // problem stats here

                                $exam->questions()->saveMany(factory(App\question::class, 10)->make());
            // and ends here
            }));
        });

    	factory(App\admin::class,3)->create();
    }
}
