<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Day;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Day::create(['day' => 'lunes']);
        Day::create(['day' => 'martes']);
        Day::create(['day' => 'miercoles']);
        Day::create(['day' => 'jueves']);
        Day::create(['day' => 'viernes']);
        Day::create(['day' => 'sabado']);
        Day::create(['day' => 'domingo']);
    }
}
