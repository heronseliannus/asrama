<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleId = DB::table('roles')->pluck('id')[0];
        DB::table('admin')->insert([
            'first_name' => 'hero',
            'last_name' => 'selianus', 
            'nilai1' => '100',
            'nilai2' => '100',
            'nilai3' => '100',
            'nilai3' => '100',
            'nilai4' => '100',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
