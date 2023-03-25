<?php

namespace App\Repository;

use App\Models\AdminGroupModel;
use App\Models\AuthorizationModel;
use App\Models\RoleModel;
use Exception;
use Illuminate\Support\Facades\Auth;

class RoleRepository
{

	function getData($n)
	{
		$data = RoleModel::orderBy('id', 'desc')->paginate($n);
		return $data;
	}

	function getSingleData($id)
	{
		$data = RoleModel::find($id);
		return $data;
	}

	function addData()
	{
		$role = RoleModel::create([
			'name' => request('name'),
		]);

		$arr_data = [];
		//id grup menu = 2,6
		//Otorisasi Dashboard
		for ($j = 1; $j < 5; $j++) {
			$arr_data[] =
				[
					'roles_id' => $role->id,
					'menus_id' => 1,
					'authorization_types_id' => $j
				];
		}
		//Grup menu id=2
		$arr_data[] =
			[
				'roles_id' => $role->id,
				'menus_id' => 2,
				'authorization_types_id' => 1
			];
		//Grup menu id=6
		$arr_data[] =
			[
				'roles_id' => $role->id,
				'menus_id' => 6,
				'authorization_types_id' => 1
			];
		AuthorizationModel::insert($arr_data);
	}

	function updateData($id)
	{
		$data = [
			'name' => request('name'),
		];
		RoleModel::find($id)->update($data);
	}
	function deleteData($id)
	{
		RoleModel::find($id)->delete();
	}
}
