<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MasterdataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleId = DB::table('roles')->pluck('id')[0];
        DB::table('users')->insert([
            'first_name' => 'selianus',
            'last_name' => 'heron', 
            'nik' => '980076',
            'phone' =>'0852337689',
            'photo'=> 'https://jpg',
            'role_id' => $roleId,
            'password' => Hash::make('secret'), 
            'address' => 'Jalan Picung 107, Sukasari',
            'city' => 'Bandung',
            'state' => 'Jawa Barat',
            'birth_date' =>  Carbon::parse('10-07-1990'),
            'email' => 'heronselianus1795@gmail.com',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
