<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Admin;

class AdminDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table = new Admin;

        $table->full_name = 'Chamud Sachintha';
        $table->email = 'Chamud.Kulathunga@edvicon.org';
        $table->password = Hash::make('123');
        $table->member_role = 'Admin';

        $table->save();
    }
}
