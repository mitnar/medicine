<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(User::all()->isEmpty()) {
            factory(User::class)->create([
                'is_admin' => false,
            ]);

            factory(User::class)->create([
                'is_admin' => true,
            ]);
        }
    }
}
