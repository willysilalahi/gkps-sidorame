<?php

namespace App\Http\Controllers;

use App\Repository\SectorRepository;
use App\Exports\PerSectorExport;
use App\Models\FamilyModel;
use App\Models\PersonModel;
use App\Models\SectorModel;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class SectorController extends Controller
{
    protected $repo;
    function __construct()
    {
        $this->repo = new SectorRepository();
    }

    function view()
    {
        $sector = $this->repo->getSector();
        $content = view('sector.view', compact('sector'));
        return view('main', compact('content'));
    }

    function detail($id)
    {
        $sector = $this->repo->getSingleSector($id);
        $content = view('sector.detail', compact('sector'));
        return view('main', compact('content'));
    }

    function export($id)
    {
        $sector = SectorModel::find($id);
        $file_name = 'Export Data ' . $sector->name  . '.xlsx';
        return Excel::download(new PerSectorExport($id),  $file_name);
    }
}
