<?php

namespace App\Exports;

use App\Models\FamilyModel;
use App\Models\PersonModel;
use App\Models\SectorModel;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class DashboardExport implements FromView, ShouldAutoSize
{
    protected $status;

    function __construct($status)
    {
        $this->status = $status;
    }

    public function view(): View
    {
        $data['sum_sector'] = SectorModel::count();
        $data['sum_family'] = FamilyModel::count();
        $data['sum_person'] = PersonModel::count();
        $data['persons'] = PersonModel::select('categorial', DB::raw('count(*) as total'))
            ->groupBy('categorial')
            ->get();
        $startOfWeek = Carbon::now()->startOfWeek();
        $endOfWeek = Carbon::now()->endOfWeek();
        $data['birthday'] = PersonModel::with(['family.sector'])->whereRaw("DATE_FORMAT(date_of_birth, '%m-%d') BETWEEN ? AND ?", [$startOfWeek->format('m-d'), $endOfWeek->format('m-d')])
            ->get();
        $data['start_birthday'] = $startOfWeek->format('d F Y');
        $data['end_birthday'] = $endOfWeek->format('d F Y');
        return view('dashboard.export', $data);
    }
}
