<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
      // User::factory(10)->create();
            DB::table('users')->insert([
                'name'=>'john Doe',
                'email'=>'john@doe.dc',
                'password'=>Hash::make('password')
                                       ]);
    }
}
