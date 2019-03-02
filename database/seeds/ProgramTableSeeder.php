<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProgramTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('programs')->insert([
            'name' => 'doni',
            'codename' => '10000987',
            'address' => 'Jalan Picung 107, Sukasari',
            'description' => 'Advanced Mikrotik Management',
            'started_at' => Carbon::parse('10-07-2018'),
            'finished_at' => Carbon::parse('18-07-2018')
        ]);
    }
}
