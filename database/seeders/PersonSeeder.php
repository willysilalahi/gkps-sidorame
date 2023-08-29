<?php

namespace Database\Seeders;

use App\Models\PersonModel;
use Illuminate\Database\Seeder;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PersonModel::truncate();
        PersonModel::insert([
            //Sektor 1
            [
                'family_id' => 1,
                'name' => 'Henry Saragih',
                'gender' => 1,
                'place_of_birth' => 'Marelan',
                'date_of_birth' => '1998-02-12',
                'categorial' => 1,
                'baptis' => null,
                'sidi' => null,
                'date_of_baptis' => null,
                'date_of_sidi' => null,
                'date_of_wedding' => null
            ],
            [
                'family_id' => 1,
                'name' => 'Tora Simamora',
                'gender' => 0,
                'place_of_birth' => 'Bandar Pinang',
                'date_of_birth' => '1998-02-12',
                'categorial' => 2,
                'baptis' => 1,
                'sidi' => 1,
                'date_of_baptis' => '1998-12-25',
                'date_of_sidi' => '2005-12-25',
                'date_of_wedding' => '2008-11-21'
            ],
            [
                'family_id' => 1,
                'name' => 'Henok Saragih',
                'gender' => 0,
                'place_of_birth' => 'Bandar Pinang',
                'date_of_birth' => '1998-02-12',
                'categorial' => 3,
                'baptis' => 1,
                'sidi' => 1,
                'date_of_baptis' => '1998-12-25',
                'date_of_sidi' => '2005-12-25',
                'date_of_wedding' => null
            ],
            [
                'family_id' => 1,
                'name' => 'Gabriel Saragih',
                'gender' => 1,
                'place_of_birth' => 'Bandar Pinang',
                'date_of_birth' => '1998-02-12',
                'categorial' => 3,
                'baptis' => 1,
                'sidi' => 1,
                'date_of_baptis' => '1998-12-25',
                'date_of_sidi' => '2005-12-25',
                'date_of_wedding' => null
            ],

            [
                'family_id' => 2,
                'name' => 'Johannes Purba',
                'gender' => 1,
                'place_of_birth' => 'Bandar Pinang',
                'date_of_birth' => '1998-02-12',
                'categorial' => 1,
                'baptis' => 1,
                'sidi' => 1,
                'date_of_baptis' => '1998-12-25',
                'date_of_sidi' => '2005-12-25',
                'date_of_wedding' => '2008-12-12'
            ],
            [
                'family_id' => 2,
                'name' => 'Helmina Saragih',
                'gender' => 0,
                'place_of_birth' => 'Bandar Pinang',
                'date_of_birth' => '1998-02-12',
                'categorial' => 2,
                'baptis' => 1,
                'sidi' => 1,
                'date_of_baptis' => '1998-12-25',
                'date_of_sidi' => '2005-12-25',
                'date_of_wedding' => '2008-12-12'
            ],
            [
                'family_id' => 2,
                'name' => 'Yohana Purba',
                'gender' => 0,
                'place_of_birth' => 'Bandar Pinang',
                'date_of_birth' => '1998-02-12',
                'categorial' => 3,
                'baptis' => 1,
                'sidi' => 1,
                'date_of_baptis' => '1998-12-25',
                'date_of_sidi' => '2005-12-25',
                'date_of_wedding' => null
            ],
            [
                'family_id' => 2,
                'name' => 'Yessi Purba',
                'gender' => 1,
                'place_of_birth' => 'Bandar Pinang',
                'date_of_birth' => '1998-02-12',
                'categorial' => 4,
                'baptis' => 1,
                'sidi' => 0,
                'date_of_baptis' => '1998-12-25',
                'date_of_sidi' => null,
                'date_of_wedding' => null
            ],


            //Sektor 2
            [
                'family_id' => 3,
                'name' => 'Risben Purba',
                'gender' => 1,
                'place_of_birth' => 'Marelan',
                'date_of_birth' => '1998-02-12',
                'categorial' => 1,
                'baptis' => 1,
                'sidi' => 1,
                'date_of_baptis' => '1998-12-25',
                'date_of_sidi' => '2005-12-25',
                'date_of_wedding' => '2008-11-21'
            ],
            [
                'family_id' => 3,
                'name' => 'Hetti Sitio',
                'gender' => 0,
                'place_of_birth' => 'Bandar Pinang',
                'date_of_birth' => '1998-02-12',
                'categorial' => 2,
                'baptis' => 1,
                'sidi' => 1,
                'date_of_baptis' => '1998-12-25',
                'date_of_sidi' => '2005-12-25',
                'date_of_wedding' => '2008-11-21'
            ],
            [
                'family_id' => 3,
                'name' => 'Raja Purba',
                'gender' => 1,
                'place_of_birth' => 'Bandar Pinang',
                'date_of_birth' => '1998-02-12',
                'categorial' => 3,
                'baptis' => 1,
                'sidi' => 1,
                'date_of_baptis' => '1998-12-25',
                'date_of_sidi' => '2005-12-25',
                'date_of_wedding' => null
            ],
            [
                'family_id' => 3,
                'name' => 'Amel Purba',
                'gender' => 0,
                'place_of_birth' => 'Bandar Pinang',
                'date_of_birth' => '1998-02-12',
                'categorial' => 3,
                'baptis' => 1,
                'sidi' => 1,
                'date_of_baptis' => '1998-12-25',
                'date_of_sidi' => '2005-12-25',
                'date_of_wedding' => null
            ],

            [
                'family_id' => 4,
                'name' => 'Antonius Purba',
                'gender' => 1,
                'place_of_birth' => 'Bandar Pinang',
                'date_of_birth' => '1998-02-12',
                'categorial' => 1,
                'baptis' => 1,
                'sidi' => 1,
                'date_of_baptis' => '1998-12-25',
                'date_of_sidi' => '2005-12-25',
                'date_of_wedding' => '2008-12-12'
            ],
            [
                'family_id' => 4,
                'name' => 'Johana Tobing',
                'gender' => 0,
                'place_of_birth' => 'Bandar Pinang',
                'date_of_birth' => '1998-02-12',
                'categorial' => 2,
                'baptis' => 1,
                'sidi' => 1,
                'date_of_baptis' => '1998-12-25',
                'date_of_sidi' => '2005-12-25',
                'date_of_wedding' => '2008-12-12'
            ],
            [
                'family_id' => 4,
                'name' => 'Tesalonika Purba',
                'gender' => 0,
                'place_of_birth' => 'Bandar Pinang',
                'date_of_birth' => '1998-02-12',
                'categorial' => 3,
                'baptis' => 1,
                'sidi' => 1,
                'date_of_baptis' => '1998-12-25',
                'date_of_sidi' => '2005-12-25',
                'date_of_wedding' => null
            ],
            [
                'family_id' => 4,
                'name' => 'Kevin Purba',
                'gender' => 1,
                'place_of_birth' => 'Bandar Pinang',
                'date_of_birth' => '1998-02-12',
                'categorial' => 4,
                'baptis' => 1,
                'sidi' => 0,
                'date_of_baptis' => '1998-12-25',
                'date_of_sidi' => null,
                'date_of_wedding' => null
            ],
            [
                'family_id' => 4,
                'name' => 'Michael Purba',
                'gender' => 1,
                'place_of_birth' => 'Bandar Pinang',
                'date_of_birth' => '1998-02-12',
                'categorial' => 4,
                'baptis' => 1,
                'sidi' => 0,
                'date_of_baptis' => '1998-12-25',
                'date_of_sidi' => null,
                'date_of_wedding' => null
            ],


            //Sektor 3
            [
                'family_id' => 5,
                'name' => 'Yusup Girsang',
                'gender' => 1,
                'place_of_birth' => 'Marelan',
                'date_of_birth' => '1998-02-12',
                'categorial' => 1,
                'baptis' => 1,
                'sidi' => 1,
                'date_of_baptis' => '1998-12-25',
                'date_of_sidi' => '2005-12-25',
                'date_of_wedding' => '2008-11-21'
            ],
            [
                'family_id' => 5,
                'name' => 'Martina Aritonang',
                'gender' => 0,
                'place_of_birth' => 'Bandar Pinang',
                'date_of_birth' => '1998-02-12',
                'categorial' => 2,
                'baptis' => 1,
                'sidi' => 1,
                'date_of_baptis' => '1998-12-25',
                'date_of_sidi' => '2005-12-25',
                'date_of_wedding' => '2008-11-21'
            ],
            [
                'family_id' => 5,
                'name' => 'Abigail Girsang',
                'gender' => 0,
                'place_of_birth' => 'Bandar Pinang',
                'date_of_birth' => '1998-02-12',
                'categorial' => 3,
                'baptis' => 1,
                'sidi' => 1,
                'date_of_baptis' => '1998-12-25',
                'date_of_sidi' => '2005-12-25',
                'date_of_wedding' => null
            ],
            [
                'family_id' => 5,
                'name' => 'Felix Girsang',
                'gender' => 0,
                'place_of_birth' => 'Bandar Pinang',
                'date_of_birth' => '1998-02-12',
                'categorial' => 3,
                'baptis' => 1,
                'sidi' => 0,
                'date_of_baptis' => '1998-12-25',
                'date_of_sidi' => null,
                'date_of_wedding' => null
            ],

            [
                'family_id' => 6,
                'name' => 'Andar Sando Sinaga',
                'gender' => 1,
                'place_of_birth' => 'Bandar Pinang',
                'date_of_birth' => '1998-02-12',
                'categorial' => 1,
                'baptis' => 1,
                'sidi' => 1,
                'date_of_baptis' => '1998-12-25',
                'date_of_sidi' => '2005-12-25',
                'date_of_wedding' => '2008-12-12'
            ],
            [
                'family_id' => 6,
                'name' => 'Irene Ginting',
                'gender' => 0,
                'place_of_birth' => 'Bandar Pinang',
                'date_of_birth' => '1998-02-12',
                'categorial' => 2,
                'baptis' => 1,
                'sidi' => 1,
                'date_of_baptis' => '1998-12-25',
                'date_of_sidi' => '2005-12-25',
                'date_of_wedding' => '2008-12-12'
            ],
            [
                'family_id' => 6,
                'name' => 'Aurel Sinaga',
                'gender' => 0,
                'place_of_birth' => 'Bandar Pinang',
                'date_of_birth' => '1998-02-12',
                'categorial' => 3,
                'baptis' => 1,
                'sidi' => 0,
                'date_of_baptis' => '1998-12-25',
                'date_of_sidi' => null,
                'date_of_wedding' => null
            ],
            [
                'family_id' => 6,
                'name' => 'Marshal Sinaga',
                'gender' => 1,
                'place_of_birth' => 'Bandar Pinang',
                'date_of_birth' => '1998-02-12',
                'categorial' => 4,
                'baptis' => 1,
                'sidi' => 0,
                'date_of_baptis' => '1998-12-25',
                'date_of_sidi' => null,
                'date_of_wedding' => null
            ],
        ]);
    }
}
