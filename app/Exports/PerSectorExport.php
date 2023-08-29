<?php

namespace App\Exports;

use App\Models\FamilyModel;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class PerSectorExport implements FromView, ShouldAutoSize
{
    protected $id;

    function __construct($id)
    {
        $this->id = $id;
    }

    public function view(): View
    {
        $family = FamilyModel::with(['sector', 'persons.family.sector'])->where('sectors_id', $this->id)->orderBy('id', 'asc')->get();
        return view('sector.export', compact('family'));
    }
}
