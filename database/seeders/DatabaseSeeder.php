<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Job;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         //\App\Models\User::factory(10)->create();
         //\App\Models\Job::factory(10)->create();
         $user=User::factory()->create([
            'name'=>'john',
             'email'=>'johnwickk@gmail.com'
        ]);
         Job::factory(6)->create([
            'user_id'=>$user->id
         ]);
    }
}
