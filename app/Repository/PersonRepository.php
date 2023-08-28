<?php

namespace App\Repository;

use App\Models\PersonModel;

class PersonRepository
{
    function getPerson()
    {
        $data = PersonModel::with(['family.sector'])->orderBy('name', 'asc')->get();
        return $data;
    }

    function getSinglePerson($id)
    {
        $data = PersonModel::with(['family.sector'])->find($id);
        return $data;
    }
}
