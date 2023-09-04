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
        DB::table('products')->insert(
            [
                [
                    'name'=> 'iphone 8s',
                    "price"=>"50000",
                    "description"=>"Branded new phone",
                    "category"=>"mobile",
                    "gallary"=>"https://plus.unsplash.com/premium_photo-1681396658834-b56190480934?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1887&q=80",
                ],
                [
                    'name'=> 'Samsung',
                    "price"=>"40000",
                    "description"=>"Branded new phone",
                    "category"=>"mobile",
                    "gallary"=>"https://images.unsplash.com/photo-1610792516307-ea5acd9c3b00?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80",
                ],
                [
                    'name'=> 'Samsung-tv',
                    "price"=>"80000",
                    "description"=>"Branded new tv",
                    "category"=>"tv",
                    "gallary"=>"https://images.unsplash.com/photo-1593784991095-a205069470b6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80",
                ],
                [
                    'name'=> 'Laptop',
                    "price"=>"90000",
                    "description"=>"Branded new laptop",
                    "category"=>"Laptop",
                    "gallary"=>"https://images.unsplash.com/photo-1544006658-89bde88e87c6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80",
                ],
                [
                    'name'=> 'Audio System',
                    "price"=>"80000",
                    "description"=>"Branded new audio system",
                    "category"=>"audiosystem",
                    "gallary"=>"https://images.unsplash.com/photo-1675716124796-638c0d106993?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2044&q=80",
                ],


            ]
        );
    }
}
