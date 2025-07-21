<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PublicUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'email' => config('api.public_user.email'),
            'name' => config('api.public_user.name'),
            'password' => bcrypt(Str::random(32)),
        ]);
    }
}
