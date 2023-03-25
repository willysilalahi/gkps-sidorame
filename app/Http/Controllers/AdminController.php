<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;
use App\Models\AdminModel;
use App\Repository\AdminRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    protected $repo;
    function __construct()
    {
        $this->repo = new AdminRepository;
    }

    function view()
    {
        $content = view('admin.view');
        return view('main', compact('content'));
    }

    function data(Request $request)
    {
        $value = null;
        $admin = AdminModel::where('roles_id', '!=', 1)->orderBy('id', 'desc');
        if ($value !== null) {
            $admin = $admin->where('name', 'LIKE', "%$value%");
        }
        $admin = $admin->paginate(10);
        return view('admin.data', compact('admin'));
    }

    function trash()
    {
        $admin = $this->repo->getTrashed();
        return view('admin.trash', compact('admin'));
    }

    function addView()
    {
        $role = $this->repo->getRole();
        $content = view('admin.add', compact('role'));
        return view('main', compact('content'));
    }


    function addPost(AdminRequest $request)
    {
        DB::beginTransaction();
        try {
            $this->repo->addData();
            DB::commit();
            return redirect()->route('admin_view_index')->with('message', 'Admin has been added');
        } catch (\Exception $exception) {
            return redirect()->route('admin_add')->withInput($request->input())->withErrors("Something Wrong");
        }
    }


    function editView($id)
    {
        $data['role'] = $this->repo->getRole();
        $data['admin'] = $this->repo->getSingleData($id);
        $content = view('admin.edit', $data);
        return view('main', compact('content'));
    }

    function editPatch(Request $request, $id)
    {
        $this->validate($request, [
            'name'  => 'required',
            'username' => "unique:admins,username,$id|alpha_dash",
            'roles_id'  => 'required',
        ]);
        DB::beginTransaction();
        try {
            $this->repo->updateData($id);
            DB::commit();
            return redirect()->route('admin_view_index')->with('message', 'Admin has been edited');
        } catch (\Exception $exception) {
            return redirect()->route('admin_edit')->withInput($request->input())->withErrors("Something Wrong");
        }
    }

    function restore(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $this->repo->restoreData($id);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollback();
            $message = [
                'status' => false,
                'error' => $exception->getMessage()
            ];
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
            $message = [
                'status' => false,
                'error' => $exception->getMessage()
            ];
        }
        return response()->json($message);
    }

    function destroy($id)
    {
        DB::beginTransaction();
        try {
            $this->repo->destroyData($id);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollback();
            $message = [
                'status' => false,
                'error' => $exception->getMessage()
            ];
        }
    }
}
