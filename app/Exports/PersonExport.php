<?php

namespace App\Exports;

use App\Models\PersonModel;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class PersonExport implements FromView, ShouldAutoSize
{
    protected $status;

    function __construct($status)
    {
        $this->status = $status;
    }

    public function view(): View
    {
        $person = PersonModel::with(['family.sector'])->orderBy('name', 'asc')->get();
        return view('person.export', compact('person'));
    }
}
