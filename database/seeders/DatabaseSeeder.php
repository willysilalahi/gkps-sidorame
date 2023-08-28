<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        $this->call([
            MenuSeeder::class,
            RoleSeeder::class,
            AdminSeeder::class,
            AuthorizationTypeSeeder::class,
            AuthorizationSeeder::class,
            SectorSeeder::class,
            FamilySeeder::class,
            PersonSeeder::class,
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
