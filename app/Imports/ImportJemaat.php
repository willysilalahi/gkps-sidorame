<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportJemaat implements ToModel, SkipsEmptyRows
{
    /**
     * @param Collection $collection
     */
    public function model(array $row)
    {
        return [];
    }
}
