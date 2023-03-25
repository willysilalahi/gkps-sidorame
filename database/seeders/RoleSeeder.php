<?php

namespace Database\Seeders;

use App\Models\RoleModel;
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
        RoleModel::truncate();
        RoleModel::insert([
            [
                'id' => 1,
                'name' => 'Master'
            ],
            [
                'id' => 2,
                'name' => 'Admin'
            ],
            [
                'id' => 3,
                'name' => 'Operational'
            ]
        ]);
    }
}
