<?php

namespace App\Repository;

use App\Models\AuthorizationModel;
use App\Models\AuthorizationTypeModel;
use App\Models\MenuModel;
use App\Models\RoleModel;
use Exception;

class AuthorizationRepository
{

	function getData($role)
	{
		$data = AuthorizationModel::where('roles_id', $role)->get();
		return $data;
	}

	function getRole()
	{
		$data = RoleModel::where('name', '!=', 'Master')->get();
		return $data;
	}

	function getMenu()
	{
		$data = MenuModel::where('route', '!=', null)->get();
		return $data;
	}

	function getType()
	{
		$data = AuthorizationTypeModel::all();
		return $data;
	}

	function update()
	{
		AuthorizationModel::where('roles_id', request('roles'))->whereHas('menu', function ($query) {
			$query->where('route', '!=', null);
		})->delete();
		if (request()->has('menu_tipe')) {
			$req = request('menu_tipe');
			$temp = [];
			foreach ($req as $val) {
				$exp = explode('_', $val);
				$ar['roles_id'] = request('roles');
				$ar['menus_id'] =  $exp[0];
				$ar['authorization_types_id'] =  $exp[1];
				$temp[] = $ar;
			}
			AuthorizationModel::insert($temp);
		}
	}
}
