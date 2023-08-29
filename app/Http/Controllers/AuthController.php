<?php

namespace App\Http\Controllers;

use App\Exports\DashboardExport;
use App\Exports\FamilyExport;
use App\Exports\PerSectorExport;
use App\Exports\PersonExport;
use App\Models\PersonModel;
use App\Models\SectorModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class AuthController extends Controller
{
    public function viewlogin(Request $request)
    {
        if ($request->has('src')) {
            return view('login');
        } else {
            if (Auth::check()) {
                return redirect('dashboard');
            } else {
                return view('login');
            }
        }
    }

    public function proccesslogin(Request $request)
    {
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard_view');
        } else {
            return redirect()->route('login')->with('login_message', 'Login gagal. Periksa kembali username dan password anda');
        }
    }

    public function proccesslogout()
    {
        Auth::logout();
        return redirect('login');
    }

    function exportPerson()
    {
        // dd("Test export jemaat");
        $file_name = 'Export Data Jemaat.xlsx';
        return Excel::download(new PersonExport(1),  $file_name);
    }

    function exportFamily()
    {
        //dd("Export keluarga boy");
        $file_name = 'Export Data Keluarga.xlsx';
        return Excel::download(new FamilyExport(1),  $file_name);
    }

    function exportDashboard()
    {
        //dd("Export dashboard eah");
        $file_name = 'Export Data Dashboard Statistik.xlsx';
        return Excel::download(new DashboardExport(1),  $file_name);
    }

    function exportPerSector($id)
    {
        //dd("Kalo ini export per sector");
        $sector = SectorModel::find($id);
        $file_name = 'Export Data ' . $sector->name  . '.xlsx';
        return Excel::download(new PerSectorExport($id),  $file_name);
    }
}
