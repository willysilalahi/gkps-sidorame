<?php

namespace App\Repository;

use App\Models\SectorModel;

class SectorRepository
{
    function getSector()
    {
        $data = SectorModel::withCount('family')->orderBy('id', 'asc')->get();
        return $data;
    }

    function getSingleSector($id)
    {
        $data = SectorModel::with(['family.persons'])->find($id);
        return $data;
    }
}
