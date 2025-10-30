<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DefaultUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            "prenom"=>"Cheikh",
            "nom"=>"MBENGUE",
            "email"=>"catm@gmail.com",
            "password"=>bcrypt("passer123"),
        ];

        User::create($userData);
    }
}
