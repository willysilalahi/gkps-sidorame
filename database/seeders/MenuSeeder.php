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
                'name' => 'News Panel',
                'route' => null,
                'icon' => 'bi bi-newspaper',
                'is_child' => 0,
                'parent_id' => null
            ],
            [
                'id' => 3,
                'name' => 'News',
                'route' => 'news',
                'icon' => null,
                'is_child' => 1,
                'parent_id' => 2
            ],
            [
                'id' => 4,
                'name' => 'News Category',
                'route' => 'news-category',
                'icon' => null,
                'is_child' => 1,
                'parent_id' => 2
            ],
            [
                'id' => 5,
                'name' => 'Activity',
                'route' => 'activity',
                'icon' => 'bi bi-activity',
                'is_child' => 0,
                'parent_id' => null
            ],
            [
                'id' => 6,
                'name' => 'Setting',
                'route' => null,
                'icon' => 'bi bi-gear',
                'is_child' => 0,
                'parent_id' => null
            ],
            [
                'id' => 7,
                'name' => 'Authorization',
                'route' => 'authorization',
                'icon' => null,
                'is_child' => 1,
                'parent_id' => 6
            ],
            [
                'id' => 8,
                'name' => 'Role',
                'route' => 'role',
                'icon' => null,
                'is_child' => 1,
                'parent_id' => 6
            ],
            [
                'id' => 9,
                'name' => 'Admin',
                'route' => 'admin',
                'icon' => null,
                'is_child' => 1,
                'parent_id' => 6
            ],
        ]);
    }
}
