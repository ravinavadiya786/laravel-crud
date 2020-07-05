<?php

use App\Company;
use App\Empolyee;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        factory(Company::class,5)->create()->each(function($emp) {
            $emp->empolyee()->saveMany(factory(Empolyee::class,3)->make());
          });
          
    }
}
