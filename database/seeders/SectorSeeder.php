<?php

namespace Database\Seeders;

use App\Models\SectorModel;
use Illuminate\Database\Seeder;

class SectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SectorModel::truncate();
        SectorModel::insert([
            [
                'name' => 'Sektor I'
            ],
            [
                'name' => 'Sektor II'
            ],
            [
                'name' => 'Sektor III'
            ]
        ]);
    }
}
