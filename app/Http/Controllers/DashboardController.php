<?php

namespace App\Http\Controllers;

use App\Models\FamilyModel;
use App\Models\PersonModel;
use App\Models\SectorModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    function view()
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
        $content = view('dashboard.view', $data);
        return view('main', ['content' => $content]);
    }

    function comingSoon()
    {
        $content = view('dashboard.coming-soon');
        return view('main', ['content' => $content]);
    }

    function test()
    {
        $content = view('dashboard.coming-soon');
        return view('main', ['content' => $content]);
    }
}
