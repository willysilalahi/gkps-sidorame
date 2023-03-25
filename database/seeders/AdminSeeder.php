<?php

namespace Database\Seeders;

use App\Models\AdminModel;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdminModel::truncate();
        AdminModel::insert([
            [
                'id' => 1,
                'roles_id' => 1,
                'name' => 'Master',
                'username' => 'master',
                'password' => bcrypt('12345'),
                'profile_image_path' => 'admin/admin.png',
                'is_active' => 1,
                'token' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 2,
                'roles_id' => 2,
                'name' => 'Admin',
                'username' => 'admin',
                'password' => bcrypt('12345'),
                'profile_image_path' => 'admin/admin.png',
                'is_active' => 1,
                'token' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 3,
                'roles_id' => 3,
                'name' => 'Gery Darmawan',
                'username' => 'gery',
                'password' => bcrypt('12345'),
                'profile_image_path' => 'admin/admin.png',
                'is_active' => 1,
                'token' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
