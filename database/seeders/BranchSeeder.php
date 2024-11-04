<?php

namespace Database\Seeders;

use App\Models\Branch;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Branch::create([
            'name' => ucwords('sucursal principal'),
            'country' => ucwords('peru'),
            'city' => ucwords('lima'),
            'address' => ucwords('jr. los alamos #213'),
            'phone' => '908123756',
            'email' => 'principal@gmai.com'
        ]);

        Branch::create([
            'name' => ucwords('sucursal secundaria'),
            'country' => ucwords('peru'),
            'city' => ucwords('huancayo'),
            'address' => ucwords('jr. los alisos #8013'),
            'phone' => '908652756',
            'email' => 'secundaria@gmai.com'
        ]);
        
        Branch::create([
            'name' => ucwords('sucursal terciaria'),
            'country' => ucwords('peru'),
            'city' => ucwords('huanuco'),
            'address' => ucwords('jr. jupite #103'),
            'phone' => '999652755',
            'email' => 'terciaria@gmai.com'
        ]);
    }
}
