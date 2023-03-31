<?php

namespace Database\Seeders;

use App\Models\AuthorizationModel;
use App\Models\RoleModel;
use Illuminate\Database\Seeder;

class AuthorizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AuthorizationModel::truncate();
        $arr_data = [];

        /*
        Group Menu : 5
        */
        $role = RoleModel::all();
        foreach ($role as $i) {
            //Otorisasi Dashboard
            for ($j = 1; $j < 5; $j++) {
                $arr_data[] =
                    [
                        'roles_id' => $i->id,
                        'menus_id' => 1,
                        'authorization_types_id' => $j
                    ];
            }
            //Grup menu id = 6
            $arr_data[] =
                [
                    'roles_id' => $i->id,
                    'menus_id' => 5,
                    'authorization_types_id' => 1
                ];
        }
        if (count($arr_data) > 0) {
            AuthorizationModel::insert($arr_data);
        }



        AuthorizationModel::insert([

            //============================= Master =================================
            [
                'roles_id' => 1,
                'menus_id' => 2,
                'authorization_types_id' => 1
            ],
            [
                'roles_id' => 1,
                'menus_id' => 2,
                'authorization_types_id' => 2
            ],
            [
                'roles_id' => 1,
                'menus_id' => 2,
                'authorization_types_id' => 3
            ],
            [
                'roles_id' => 1,
                'menus_id' => 2,
                'authorization_types_id' => 4
            ],
            [
                'roles_id' => 1,
                'menus_id' => 3,
                'authorization_types_id' => 1
            ],
            [
                'roles_id' => 1,
                'menus_id' => 3,
                'authorization_types_id' => 2
            ],
            [
                'roles_id' => 1,
                'menus_id' => 3,
                'authorization_types_id' => 3
            ],
            [
                'roles_id' => 1,
                'menus_id' => 3,
                'authorization_types_id' => 4
            ],
            [
                'roles_id' => 1,
                'menus_id' => 4,
                'authorization_types_id' => 1
            ],
            [
                'roles_id' => 1,
                'menus_id' => 4,
                'authorization_types_id' => 2
            ],
            [
                'roles_id' => 1,
                'menus_id' => 4,
                'authorization_types_id' => 3
            ],
            [
                'roles_id' => 1,
                'menus_id' => 4,
                'authorization_types_id' => 4
            ],
            [
                'roles_id' => 1,
                'menus_id' => 5,
                'authorization_types_id' => 1
            ],
            [
                'roles_id' => 1,
                'menus_id' => 5,
                'authorization_types_id' => 2
            ],
            [
                'roles_id' => 1,
                'menus_id' => 5,
                'authorization_types_id' => 3
            ],
            [
                'roles_id' => 1,
                'menus_id' => 5,
                'authorization_types_id' => 4
            ],
            [
                'roles_id' => 1,
                'menus_id' => 6,
                'authorization_types_id' => 1
            ],
            [
                'roles_id' => 1,
                'menus_id' => 6,
                'authorization_types_id' => 2
            ],
            [
                'roles_id' => 1,
                'menus_id' => 6,
                'authorization_types_id' => 3
            ],
            [
                'roles_id' => 1,
                'menus_id' => 6,
                'authorization_types_id' => 4
            ],
            [
                'roles_id' => 1,
                'menus_id' => 7,
                'authorization_types_id' => 1
            ],
            [
                'roles_id' => 1,
                'menus_id' => 7,
                'authorization_types_id' => 2
            ],
            [
                'roles_id' => 1,
                'menus_id' => 7,
                'authorization_types_id' => 3
            ],
            [
                'roles_id' => 1,
                'menus_id' => 7,
                'authorization_types_id' => 4
            ],
            [
                'roles_id' => 1,
                'menus_id' => 8,
                'authorization_types_id' => 1
            ],
            [
                'roles_id' => 1,
                'menus_id' => 8,
                'authorization_types_id' => 2
            ],
            [
                'roles_id' => 1,
                'menus_id' => 8,
                'authorization_types_id' => 3
            ],
            [
                'roles_id' => 1,
                'menus_id' => 8,
                'authorization_types_id' => 4
            ],



            //============================= Admin =================================
            [
                'roles_id' => 2,
                'menus_id' => 3,
                'authorization_types_id' => 1
            ],
            [
                'roles_id' => 2,
                'menus_id' => 3,
                'authorization_types_id' => 2
            ],
            [
                'roles_id' => 2,
                'menus_id' => 3,
                'authorization_types_id' => 3
            ],
            [
                'roles_id' => 2,
                'menus_id' => 3,
                'authorization_types_id' => 4
            ],
            [
                'roles_id' => 2,
                'menus_id' => 4,
                'authorization_types_id' => 1
            ],
            [
                'roles_id' => 2,
                'menus_id' => 4,
                'authorization_types_id' => 2
            ],
            [
                'roles_id' => 2,
                'menus_id' => 4,
                'authorization_types_id' => 3
            ],
            [
                'roles_id' => 2,
                'menus_id' => 4,
                'authorization_types_id' => 4
            ],




            //============================= Jemaat =================================
            [
                'roles_id' => 3,
                'menus_id' => 3,
                'authorization_types_id' => 1
            ],
            [
                'roles_id' => 3,
                'menus_id' => 3,
                'authorization_types_id' => 2
            ],
            [
                'roles_id' => 3,
                'menus_id' => 3,
                'authorization_types_id' => 3
            ],
            [
                'roles_id' => 3,
                'menus_id' => 3,
                'authorization_types_id' => 4
            ],
        ]);
    }
}
