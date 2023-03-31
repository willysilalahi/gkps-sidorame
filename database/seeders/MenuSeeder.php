<?php

namespace Database\Seeders;

use App\Models\MenuModel;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MenuModel::truncate();
        MenuModel::insert([
            [
                'id' => 1,
                'name' => 'Dashboard',
                'route' => 'dashboard',
                'icon' => 'bi bi-grid',
                'is_child' => 0,
                'parent_id' => null
            ],
            [
                'id' => 2,
                'name' => 'Keluarga',
                'route' => 'family',
                'icon' => 'bi bi-box2-fill',
                'is_child' => 0,
                'parent_id' => null
            ],
            [
                'id' => 3,
                'name' => 'Jemaat',
                'route' => 'person',
                'icon' => 'bi bi-people-fill',
                'is_child' => 0,
                'parent_id' => null
            ],
            [
                'id' => 4,
                'name' => 'Activity',
                'route' => 'activity',
                'icon' => 'bi bi-activity',
                'is_child' => 0,
                'parent_id' => null
            ],
            [
                'id' => 5,
                'name' => 'Setting',
                'route' => null,
                'icon' => 'bi bi-gear',
                'is_child' => 0,
                'parent_id' => null
            ],
            [
                'id' => 6,
                'name' => 'Authorization',
                'route' => 'authorization',
                'icon' => null,
                'is_child' => 1,
                'parent_id' => 5
            ],
            [
                'id' => 7,
                'name' => 'Role',
                'route' => 'role',
                'icon' => null,
                'is_child' => 1,
                'parent_id' => 5
            ],
            [
                'id' => 8,
                'name' => 'Admin',
                'route' => 'admin',
                'icon' => null,
                'is_child' => 1,
                'parent_id' => 5
            ],
        ]);
    }
}
