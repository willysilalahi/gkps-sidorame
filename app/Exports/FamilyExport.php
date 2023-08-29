<?php

namespace App\Exports;

use App\Models\FamilyModel;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class FamilyExport implements FromView, ShouldAutoSize
{
    protected $status;

    function __construct($status)
    {
        $this->status = $status;
    }

    public function view(): View
    {
        $family = FamilyModel::with(['sector', 'persons.family.sector'])->orderBy('sectors_id', 'asc')->get();
        return view('family.export', compact('family'));
    }
}
