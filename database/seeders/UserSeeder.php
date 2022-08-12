<?php

namespace Database\Seeders;

use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email'=> 'admin@gmail.com',
                'password'=>Hash::make('admin123'),
                'role'=>'admin',
                'created_at'=>now()
            ],[
                'name' => 'Seller',
                'email'=> 'seller@gmail.com',
                'password'=>Hash::make('seller123'),
                'role'=>'seller',
                'created_at'=>now()
            ],[
                'name' => 'Customer',
                'email'=> 'customer@gmail.com',
                'password'=>Hash::make('customer123'),
                'role'=>'customer',
                'created_at'=>now()
            ]
        ]);
    }
}
