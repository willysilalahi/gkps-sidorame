<?php

namespace Database\Seeders;

use App\Models\FamilyModel;
use Illuminate\Database\Seeder;

class FamilySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FamilyModel::truncate();
        // FamilyModel::insert([
        //     [
        //         'sectors_id' => 1,
        //         'code' => 'S01-001',
        //         'type' => 1
        //     ],
        //     [
        //         'sectors_id' => 1,
        //         'code' => 'S01-002',
        //         'type' => 0
        //     ],

        //     [
        //         'sectors_id' => 2,
        //         'code' => 'S02-001',
        //         'type' => 1
        //     ],
        //     [
        //         'sectors_id' => 2,
        //         'code' => 'S02-002',
        //         'type' => 0
        //     ],

        //     [
        //         'sectors_id' => 3,
        //         'code' => 'S03-001',
        //         'type' => 1
        //     ],
        //     [
        //         'sectors_id' => 3,
        //         'code' => 'S03-002',
        //         'type' => 0
        //     ],
        // ]);
    }
}
