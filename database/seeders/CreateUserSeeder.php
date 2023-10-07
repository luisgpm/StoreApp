<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $user = [
            [
               'name'=>'Admin',
               'email'=>'admin@itsolutionstuff.com',
               'domicilio' => 'av 27 sep',
               'telefono' => '1234567890',
               'rol'=>'1',
               'password'=> bcrypt('123456789'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
