<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Str;
use App\Models\Teachers;

class TeachersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Teachers::factory()->count(20)->create();
        // DB::table('users')->insert([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10).'@gmail.com',
        //     'password' => Hash::make('password'),
        // ]);

    //     $data = [
    //         [
    //             'name' => Str::random(10),
    //             'email' => Str::random(10).'@gmail.com',
    //             'address' => Str::random(30),
    //         ],
    //         [
    //             'name' => Str::random(10),
    //             'email' => Str::random(10).'@gmail.com',
    //             'address' => Str::random(30),
    //         ],
    //         [
    //             'name' => Str::random(10),
    //             'email' => Str::random(10).'@gmail.com',
    //             'address' => Str::random(30),
    //         ],
    //         [
    //             'name' => Str::random(10),
    //             'email' => Str::random(10).'@gmail.com',
    //             'address' => Str::random(30),
    //         ],
    //         [
    //             'name' => Str::random(10),
    //             'email' => Str::random(10).'@gmail.com',
    //             'address' => Str::random(30),
    //         ],
            
    //     ];

        // DB::table('teachears')->insert($data);
    }
}
