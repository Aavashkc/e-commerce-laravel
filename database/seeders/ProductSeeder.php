<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product')->insert(
            [
                [
                    'name'=> 'iphone 8s',
                    "price"=>"50000",
                    "description"=>"Branded new phone",
                    "category"=>"mobile",
                    "gallary"=>"https://unsplash.com/photos/fYBXeJUEGZM",
                ],
                [
                    'name'=> 'Samsung',
                    "price"=>"40000",
                    "description"=>"Branded new phone",
                    "category"=>"mobile",
                    "gallary"=>"https://unsplash.com/photos/z3kBG5xIhjo",
                ],
                [
                    'name'=> 'Samsung-tv',
                    "price"=>"80000",
                    "description"=>"Branded new tv",
                    "category"=>"tv",
                    "gallary"=>"https://unsplash.com/photos/Fhwg7BrGUpk",
                ],
                [
                    'name'=> 'Laptop',
                    "price"=>"90000",
                    "description"=>"Branded new laptop",
                    "category"=>"Laptop",
                    "gallary"=>"https://unsplash.com/photos/bEeq7l5LoiI",
                ],
                [
                    'name'=> 'Audio System',
                    "price"=>"80000",
                    "description"=>"Branded new audio system",
                    "category"=>"audiosystem",
                    "gallary"=>"https://unsplash.com/photos/FDIJU4mave8",
                ],


            ]
        );
    }
}
