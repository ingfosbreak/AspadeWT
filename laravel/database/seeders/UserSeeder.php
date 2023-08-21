<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\UserFull;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $userEntry = new User();
        $userEntry->username = "admin";
        $userEntry->password = "admin";
        $userEntry->role = "admin";
        $userEntry->save();

        $userFull = new UserFull();
        $userFull->user_id = $userEntry->id;
        $userFull->email = fake()->unique()->safeEmail();
        $userFull->firstname = fake()->name();
        $userFull->lastname = fake()->lastName();
        $userFull->faculty = fake()->text();
        $userFull->year = fake()->randomDigitNot(2);
        $userFull->save();

        $userEntry = new User();
        $userEntry->username = "user";
        $userEntry->password = "user";
        $userEntry->role = "user";
        $userEntry->save();

        $userFull = new UserFull();
        $userFull->user_id = $userEntry->id;
        $userFull->email = fake()->unique()->safeEmail();
        $userFull->firstname = fake()->name();
        $userFull->lastname = fake()->lastName();
        $userFull->faculty = fake()->text();
        $userFull->year = fake()->randomDigitNot(2);
        $userFull->save();

        $userEntry = new User();
        $userEntry->username = "user1";
        $userEntry->password = "user1";
        $userEntry->role = "user";
        $userEntry->save();

        $userFull = new UserFull();
        $userFull->user_id = $userEntry->id;
        $userFull->email = fake()->unique()->safeEmail();
        $userFull->firstname = fake()->name();
        $userFull->lastname = fake()->lastName();
        $userFull->faculty = fake()->text();
        $userFull->year = fake()->randomDigitNot(2);
        $userFull->save();

        $userEntry = new User();
        $userEntry->username = "user2";
        $userEntry->password = "user2";
        $userEntry->role = "user";
        $userEntry->save();

        $userFull = new UserFull();
        $userFull->user_id = $userEntry->id;
        $userFull->email = fake()->unique()->safeEmail();
        $userFull->firstname = fake()->name();
        $userFull->lastname = fake()->lastName();
        $userFull->faculty = fake()->text();
        $userFull->year = fake()->randomDigitNot(2);
        $userFull->save();

        $userEntry = new User();
        $userEntry->username = "sus";
        $userEntry->password = "sus";
        $userEntry->role = "user";
        $userEntry->status = "ban";
        $userEntry->save();

        $userFull = new UserFull();
        $userFull->user_id = $userEntry->id;
        $userFull->email = fake()->unique()->safeEmail();
        $userFull->firstname = fake()->name();
        $userFull->lastname = fake()->lastName();
        $userFull->faculty = fake()->text();
        $userFull->year = fake()->randomDigitNot(2);
        $userFull->save();



        for ($x = 0; $x <= 100; $x+=1) {

            $userEntry = new User();
            $userEntry->username = fake()->userName();
            $userEntry->password = fake()->password();
            $userEntry->role = "user";
            $userEntry->status = "active";
            $userEntry->save();

            $userFull = new UserFull();
            $userFull->user_id = $userEntry->id;
            $userFull->email = fake()->unique()->safeEmail();
            $userFull->firstname = fake()->name();
            $userFull->lastname = fake()->lastName();
            $userFull->faculty = fake()->text();
            $userFull->year = fake()->randomDigitNot(2);
            $userFull->save();

        }



        

        


        
        



        
    }  
}
