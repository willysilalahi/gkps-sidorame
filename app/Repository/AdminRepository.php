<?php

namespace App\Repository;

use App\Models\AdminModel;
use App\Models\RoleModel;
use Illuminate\Support\Facades\Auth;

class AdminRepository
{

	function getData($n)
	{
		$admin = Auth::user();
		$data = AdminModel::where('id', '!=', $admin->id)->orderBy('id', 'asc')->paginate($n);
		return $data;
	}

	function getSingleData($id)
	{
		$data = AdminModel::find($id);
		return $data;
	}

	function getRole()
	{
		$data = RoleModel::where('name', '!=', 'Master')->get();
		return $data;
	}

	function getTrashed()
	{
		$data = AdminModel::onlyTrashed()->get();
		return $data;
	}


	function addData()
	{
		AdminModel::create([
			'roles_id' => request('roles_id'),
			'name' => request('name'),
			'username' => request('username'),
			'password' => bcrypt(request('password')),
			'profile_image_path' => null,
			'is_active' => 1,
			'token' => null,
		]);
	}

	function updateData($id)
	{
		$data = [
			'roles_id' => request('roles_id'),
			'name' => request('name'),
			'profile_image_path' => null,
			'username' => request('username'),
			'is_active' => request('is_active'),
		];
		AdminModel::find($id)->update($data);
	}

	function restoreData($id)
	{
		AdminModel::onlyTrashed()->where('id', $id)->restore();
	}

	function resetPassword($id, $password)
	{
		$data = [
			'password' => bcrypt($password)
		];
		AdminModel::find($id)->update($data);
	}

	function destroyData($id)
	{
		AdminModel::onlyTrashed()->where('id', $id)->forceDelete();
	}


	function deleteData($id)
	{
		AdminModel::find($id)->delete();
		AdminModel::onlyTrashed()->where('id', $id)->forceDelete();
	}
}
