<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([[
            'name'=>'Belo Horizonte',
            'state_id'=>'1'
        ],[
            'name'=>'São Paulo',
            'state_id'=>'2'
        ]]);

    }
}
