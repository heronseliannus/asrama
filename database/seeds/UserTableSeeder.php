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
        DB::table('users')->insert([
            'first_name' => 'hero',
            'last_name' => 'selianus', 
            'nik' => '980076',
            'phone' =>'0852337689',
            'photo'=> 'https://jpg',
            'role_id' => $roleId,
            'password' => Hash::make('secret'), 
            'address' => 'Jalan Picung 107, Sukasari',
            'city' => 'Bandung',
            'state' => 'Jawa Barat',
            'program' => 'Pelatihan Kepemimpinan'
            'birth_date' =>  Carbon::parse('10-07-1990'),
            'email' => 'heronselianus1795@gmail.com',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }

   public function run()
   {
        $roleId = DB::table('roles')->pluck('id')[0];
        DB::table('users')->delete([
            'first_name' => 'heron',
            'last_name' => 'seli', 
            'nik' => '9806',
            'phone' =>'08537689',
            'photo'=> 'https://jpg',
            'role_id' => $roleId,
            'password' => Hash::make('secret'), 
            'address' => 'Jalan Picung, Sukasari',
            'city' => 'Bandung',
            'state' => 'Jawa Barat',
            'program' => 'Pelatihan Kampiun'
            'birth_date' =>  Carbon::parse('10-07-1995'),
            'email' => 'heronselianus171095@gmail.com',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
    public function run()
    {
         $roleId = DB::table('roles')->pluck('id')[0];
         DB::table('users')->delete([
             'first_name' => 'heron',
             'last_name' => 'seli', 
             'nik' => '9806',
             'phone' =>'08537689',
             'photo'=> 'https://jpg',
             'role_id' => $roleId,
             'password' => Hash::make('secret'), 
             'address' => 'Jalan Picung, Sukasari',
             'city' => 'Bandung',
             'state' => 'Jawa Barat',
             'program' => 'Pelatihan Kampiun'
             'birth_date' =>  Carbon::parse('10-07-1995'),
             'email' => 'heronselianus171095@gmail.com',
             'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
         ]);
     }
}
