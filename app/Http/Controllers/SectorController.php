<?php

namespace App\Http\Controllers;

use App\Repository\SectorRepository;
use Illuminate\Http\Request;

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
}
