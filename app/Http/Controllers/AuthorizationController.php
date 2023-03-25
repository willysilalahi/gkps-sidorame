<?php

namespace App\Http\Controllers;

use App\Repository\AuthorizationRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthorizationController extends Controller
{
    protected $repo;
    function __construct()
    {
        $this->repo = new AuthorizationRepository;
    }

    function index()
    {
        $data['roles'] = $this->repo->getRole();
        $content = view('authorization.view', $data);
        return view('main', compact('content'));
    }

    function data($users_role)
    {
        $data['menu'] = $this->repo->getMenu();
        $data['type'] = $this->repo->getType();
        $data['authorization'] = $this->repo->getData($users_role);
        return view('authorization.data', $data);
    }

    function update(Request $request)
    {
        DB::beginTransaction();
        try {
            $this->repo->update();
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollback();
            $message = [
                'status' => false,
                'error' => "Something Wrong"
            ];
            return response()->json($message);
        }
    }
}
