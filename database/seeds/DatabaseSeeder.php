<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Admin";
        $user->password = Hash::make('rahasia');
        $user->email = 'admin@3dexpert.id';
        $user->jenis_kelamin = 'L';
        $user->universitas = 'UNESA';
        $user->alamat_lengkap = "Bangkalan";
        $user->biodata = "Data diri";
        $user->roles = json_encode('ADMIN');
        $user->phone = "000000000";
        $user->save();
    }
}
