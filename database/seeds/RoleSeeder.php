<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Role::Create(['name' => 'Admin']);
        \App\Role::Create(['name' => 'Viewer']);

    }
}
