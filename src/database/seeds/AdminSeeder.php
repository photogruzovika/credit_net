<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class AdminSeeder extends Seeder
{
    public function run()
    {
        \App\User::create(['name'=>'admin','email'=>'admin@admin.admin','password'=>\Illuminate\Support\Facades\Hash::make('admin_pass790')]);
    }
}
