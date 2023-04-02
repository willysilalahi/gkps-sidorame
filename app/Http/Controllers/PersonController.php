<?php

namespace App\Http\Controllers;

use App\Repository\PersonRepository;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    protected $repo;
    function __construct()
    {
        $this->repo = new PersonRepository();
    }

    function view()
    {
        $person = $this->repo->getPerson();
        $content = view('person.view', compact('person'));
        return view('main', compact('content'));
    }

    function detail($id)
    {
        $person = $this->repo->getSinglePerson($id);
        $content = view('person.detail', compact('person'));
        return view('main', compact('content'));
    }
}
