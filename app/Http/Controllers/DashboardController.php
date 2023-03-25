<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function view()
    {
        $content = view('dashboard.view');
        return view('main', ['content' => $content]);
    }

    function comingSoon()
    {
        $content = view('dashboard.coming-soon');
        return view('main', ['content' => $content]);
    }
}
