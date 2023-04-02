<?php

namespace App\Http\Controllers;

use App\Repository\FamilyRepository;

class FamilyController extends Controller
{
    protected $repo;
    function __construct()
    {
        $this->repo = new FamilyRepository();
    }

    function view()
    {
        $family = $this->repo->getFamily();
        $content = view('family.view', compact('family'));
        return view('main', compact('content'));
    }

    function detail($id)
    {
        $family = $this->repo->getSingleFamily($id);
        $content = view('family.detail', compact('family'));
        return view('main', compact('content'));
    }
}
