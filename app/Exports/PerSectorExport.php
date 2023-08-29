<?php

namespace App\Exports;

use App\Models\FamilyModel;
use App\Models\PersonModel;
use App\Models\SectorModel;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
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
        $data['gender'] = PersonModel::whereHas('family', function ($qr) {
            $qr->where('sectors_id', $this->id);
        })->select('gender', DB::raw('count(*) as total'))
            ->groupBy('gender')
            ->get();
        $data['jiwa'] = PersonModel::whereHas('family', function ($qr) {
            $qr->where('sectors_id', $this->id);
        })->count();
        $data['tangga'] = FamilyModel::where('sectors_id', $this->id)->select('type', DB::raw('count(*) as total'))
            ->groupBy('type')
            ->get();
        $data['keluarga'] = FamilyModel::where('sectors_id', $this->id)->count();
        $data['seksi'] = PersonModel::whereHas('family', function ($qr) {
            $qr->where('sectors_id', $this->id);
        })->select('categorial', DB::raw('count(*) as total'))
            ->groupBy('categorial')
            ->get();
        $data['sector'] = SectorModel::find($this->id);
        $data['family'] = FamilyModel::with(['sector', 'persons.family.sector'])->where('sectors_id', $this->id)->orderBy('id', 'asc')->get();
        return view('sector.export', $data);
    }
}
