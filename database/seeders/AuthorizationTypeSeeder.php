<?php

namespace Database\Seeders;

use App\Models\AuthorizationTypeModel;
use Illuminate\Database\Seeder;

class AuthorizationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AuthorizationTypeModel::truncate();
        AuthorizationTypeModel::insert([
            [
                'id' => 1,
                'name' => 'view'
            ],
            [
                'id' => 2,
                'name' => 'add'
            ],
            [
                'id' => 3,
                'name' => 'edit'
            ],
            [
                'id' => 4,
                'name' => 'delete'
            ]
        ]);
    }
}
