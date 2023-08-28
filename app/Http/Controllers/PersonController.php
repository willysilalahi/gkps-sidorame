<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonRequest;
use App\Models\PersonModel;
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
        $persons = $this->repo->getPerson();
        $content = view('person.view', compact('persons'));
        return view('main', compact('content'));
    }

    function detail($id)
    {
        $person = $this->repo->getSinglePerson($id);
        $content = view('person.detail', compact('person'));
        return view('main', compact('content'));
    }

    function addView()
    {
        $content = view('person.add');
        return view('main', compact('content'));
    }

    function editView($id)
    {
        $person = PersonModel::find($id);
        $content = view('person.edit', compact('person'));
        return view('main', compact('content'));
    }

    function create(PersonRequest $request)
    {
        PersonModel::create([
            'name' => $request->name,
            'gender' => $request->gender,
            'place_of_birth' => $request->place_of_birth,
            'date_of_birth' => $request->date_of_birth,
            'categorial' => $request->categorial,
            'baptis' => $request->baptis,
            'sidi' => $request->sidi,
            'date_of_baptis' => $request->date_of_baptis,
            'date_of_sidi' => $request->date_of_sidi,
            'date_of_wedding' => $request->date_of_wedding,
        ]);
        return redirect()->route('person_view');
    }

    function update(PersonRequest $request, $id)
    {
        $person = PersonModel::find($id);
        $data = [
            'name' => $request->name,
            'gender' => $request->gender,
            'place_of_birth' => $request->place_of_birth,
            'date_of_birth' => $request->date_of_birth,
            'categorial' => $request->categorial,
            'baptis' => $request->baptis,
            'sidi' => $request->sidi,
            'date_of_baptis' => $request->date_of_baptis,
            'date_of_sidi' => $request->date_of_sidi,
            'date_of_wedding' => $request->date_of_wedding,
        ];
        $person->update($data);
        return redirect()->route('person_view');
    }
}
