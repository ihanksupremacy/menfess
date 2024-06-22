<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\user;
use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    User::create([
        'name' => 'raihan',
        'email' => 'raihan_muhaimin@yahoo.com',
        'username' => 'raihan',
        'password' => Hash::make('12345678'),
        'aboutme' => 'yahaha',
    ]);

    User::create([
        'name' => 'ihank',
        'email' => 'raihan_muhaimin@gmail.com',
        'username' => 'ihank',
        'password' => Hash::make('12345678'),
        'aboutme' => 'yahaha',
    ]);
    
    
}

}
