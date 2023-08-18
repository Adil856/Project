<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;
use Faker\Factory as Faker;

class CustomerSeeder extends Seeder
{
    // run the data base seed
    
    public function run()
    
        {
            for ($i=0; $i < 10; $i++) { 
                # code...
                $faker = Faker::create();
                $customer = new Customer;
                $customer->name = $faker->name;
                $customer->email = $faker->email;
                $customer->save();
            }
           
        }
        
    }

