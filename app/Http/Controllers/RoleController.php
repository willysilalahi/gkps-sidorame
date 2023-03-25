<?php

namespace App\Http\Controllers;

use App\Models\RoleModel;
use App\Repository\RoleRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    protected $repo;
    function __construct()
    {
        $this->repo = new RoleRepository;
    }

    function view()
    {
        $content = view('role.view');
        return view('main', compact('content'));
    }

    function data(Request $request)
    {
        $role = RoleModel::where('name', '!=', 'Master')->orderBy('id', 'desc')->paginate(10);
        return view('role.data', compact('role'));
    }

    function addView()
    {
        $content = view('role.add');
        return view('main', compact('content'));
    }


    function addPost(Request $request)
    {
        $this->validate($request, [
            'name' => "required|unique:roles,name",
        ]);

        DB::beginTransaction();
        try {
            $this->repo->addData();
            DB::commit();
            return redirect()->route('role_view_index')->with('message', 'Role has been added');
        } catch (\Exception $exception) {
            return redirect()->route('role_add')->withInput($request->input())->withErrors("Something Wrong");
        }
    }

    function editView($id)
    {
        $data['role'] = $this->repo->getSingleData($id);
        $content = view('role.edit', $data);
        return view('main', compact('content'));
    }

    function editPatch(Request $request, $id)
    {
        $this->validate($request, [
            'name' => "required|unique:roles,name,$id",
        ]);
        DB::beginTransaction();
        try {
            $this->repo->updateData($id);
            DB::commit();
            return redirect()->route('role_view_index')->with('message', 'Role has been edited');
        } catch (\Exception $exception) {
            return redirect()->route('role_edit')->withInput($request->input())->withErrors("Something Wrong");
        }
    }

    function delete($id)
    {
        DB::beginTransaction();
        try {
            $this->repo->deleteData($id);
            DB::commit();
            $message = [
                'status' => true
            ];
        } catch (\Exception $exception) {
            DB::rollback();
        }
        return response()->json($message);
    }
}
