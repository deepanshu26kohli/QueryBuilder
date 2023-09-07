<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get(path:'database/json/users.json');

        $users = collect(json_decode(($json)));

       foreach($users as $key => $user){

        foreach($user as $user){
            DB::table('users')->insert([

                'name' => $user->name,
                'email' => $user->email,
                'age' => $user->age,
                'city' => $user->city,
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')


            ]);
        }

            
        }
    }
}
