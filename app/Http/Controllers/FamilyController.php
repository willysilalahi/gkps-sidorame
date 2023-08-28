<?php

namespace App\Http\Controllers;

use App\Http\Requests\FamilyRequest;
use App\Models\FamilyModel;
use App\Models\PersonModel;
use App\Models\SectorModel;
use App\Repository\FamilyRepository;

class FamilyController extends Controller
{

    function view()
    {
        $family = FamilyModel::with(['sector', 'persons'])->get();
        $content = view('family.view', compact('family'));
        return view('main', compact('content'));
    }

    function detail($id)
    {
        $family = FamilyModel::with(['sector', 'persons'])->find($id);
        $content = view('family.detail', compact('family'));
        return view('main', compact('content'));
    }

    function addView()
    {
        $sector = SectorModel::all();
        $persons = PersonModel::where('family_id', null)->orderBy('name', 'asc')->get();
        $content = view('family.add', compact('sector', 'persons'));
        return view('main', compact('content'));
    }

    function editView($id)
    {
        $family = FamilyModel::with(['persons', 'sector'])->find($id);
        $sector = SectorModel::all();
        $persons = PersonModel::where('family_id', null)->orderBy('name', 'asc')->get();
        $content = view('family.edit', compact('sector', 'persons', 'family'));
        return view('main', compact('content'));
    }

    function create(FamilyRequest $request)
    {
        $family = FamilyModel::create([
            'sectors_id' => $request->sectors_id,
            'code' => $request->code,
            'type' => $request->type
        ]);
        if (count($request->persons) > 0) {
            for ($i = 0; $i < count($request->persons); $i++) {
                $person = PersonModel::find($request->persons[$i]);
                $data = [
                    'family_id' => $family->id
                ];
                $person->update($data);
            }
        }
        return redirect()->route('family_view');
    }

    function update(FamilyRequest $request, $id)
    {
        $family = FamilyModel::with(['persons'])->find($id);
        $data = [
            'sectors_id' => $request->sectors_id,
            'code' => $request->code,
            'type' => $request->type
        ];
        $family->update($data);
        foreach ($family->persons as $i) {
            $tmp_person = PersonModel::find($i->id);
            $update = [
                'family_id' => null
            ];
            $tmp_person->update($update);
        }
        if (count($request->persons) > 0) {
            for ($i = 0; $i < count($request->persons); $i++) {
                $person = PersonModel::find($request->persons[$i]);
                $data = [
                    'family_id' => $family->id
                ];
                $person->update($data);
            }
        }
        return redirect()->route('family_view');
    }
}
