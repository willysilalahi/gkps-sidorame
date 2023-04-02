<?php

namespace App\Http\Controllers;

use App\Repository\ActivityRepository;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    protected $repo;
    function __construct()
    {
        $this->repo = new ActivityRepository();
    }

    function view()
    {
        $activity = $this->repo->getActivity();
        $content = view('activity.view', compact('activity'));
        return view('main', compact('content'));
    }

    function detail($id)
    {
        $family = $this->repo->getSingleFamily($id);
        $content = view('family.detail', compact('family'));
        return view('main', compact('content'));
    }
}
