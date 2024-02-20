<?php

namespace App\Http\Controllers;

use App\Models\PersonModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeletedPersonController extends Controller
{
    function view()
    {
        $persons = PersonModel::with(['family'])->onlyTrashed()->get();
        $content = view('deleted-person.view', compact('persons'));
        return view('main', compact('content'));
    }

    function editView($id)
    {
        $person = PersonModel::withTrashed()->find($id);
        $content = view('deleted-person.edit', compact('person'));
        return view('main', compact('content'));
    }

    function update(Request $request, $id)
    {
        PersonModel::withTrashed()->find($id)->restore();
        $person = PersonModel::find($id);
        $data = [
            'family_id' => $request->family_id,
        ];
        $person->update($data);
        return redirect()->route('deleted-person_view');
    }

    function restore($id)
    {
        DB::beginTransaction();
        try {
            PersonModel::onlyTrashed()->where('id', $id)->restore();
            $update = [
                'family_id' => null
            ];
            PersonModel::find($id)->update($update);
            DB::commit();
            $message = [
                'status' => true
            ];
        } catch (\Exception $exception) {
            DB::rollback();
            $message = [
                'status' => false,
                'error' => "Something Wrong"
            ];
        }
        return response()->json($message);
    }
}
