<?php

namespace App\Helper;

use App\Models\MenuModel;
use App\Models\AuthorizationTypeModel;
use App\Models\InvoiceModel;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/**
 * 
 */
class Helper
{
	public static function getMenus()
	{
		$type = AuthorizationTypeModel::where('name', 'view')->first();
		$menu = MenuModel::with(['child'])->where('parent_id', null)->whereHas('auth', function (Builder $query) use ($type) {
			$query->where('authorization_types_id', $type->id)->where('roles_id', Auth::user()->roles_id);
		})->orderBy('id', 'asc')->get();
		return $menu;
	}

	public static function authChild($id)
	{
		$type = AuthorizationTypeModel::where('name', 'view')->first();
		$data = MenuModel::where('parent_id', $id)->whereHas('auth', function (Builder $query) use ($type) {
			$query->where('authorization_types_id', $type->id)->where('roles_id', Auth::user()->roles_id);
		})->get();
		return $data;
	}

	public static function test()
	{
		return "WOW";
	}


	public static function changeRouteName()
	{
		$req = \Route::getCurrentRoute()->getName();
		$exp = explode('_', $req);
		if ($exp[0] == 'profile') {
			return $data = [
				'name' => 'Profil'
			];
		} else {
			$menuName = MenuModel::where('route', $exp[0])->first()->toArray();
			return $menuName;
		}
	}

	public static function setActiveMenu($routes)
	{
		$route = Route::getCurrentRoute()->uri;
		$exp = explode('/', $route);
		$route = $exp[0];
		if ($exp[0] == 'profile') {
			return 0;
		} else {
			$menu = MenuModel::where('route', $route)->first();
			if ($routes == $menu->route) {
				return 1;
			} else {
				return 0;
			}
		}
	}

	public static function setChildActive($id)
	{
		$route = Route::getCurrentRoute()->uri;
		$exp = explode('/', $route);
		$route = $exp[0];
		if ($exp[0] == 'profile') {
			return 0;
		} else {
			$menu = MenuModel::where('parent_id', $id)->where('route', $route)->get();
			if (count($menu) > 0) {
				return 1;
			} else {
				return 0;
			}
		}
	}



	public static function staticPath($path, $options = array())
	{
		if ($path == NULL || $path == '') {
			return null;
		}
		if ($options == NULL) {
			$options = array();
		}
		unset($options['s']);
		ksort($options);
		$baseUrl = env('STATIC_PATH');

		$signKey = 'v-LK4WCdhcfcc%jt*VC2cj%nVpu+xQKvLUA%H86kRVk_4bgG8&CWM#k*b_7MUJpmTc=4GFmKFp7=K%67je-skxC5vz+r#xT?62tT?Aw%FtQ4Y3gvnwHTwqhxUh89wCa_';

		$path = ltrim($path, '/');
		$signature = md5($signKey . ':' . $path . '?' . http_build_query($options));
		$options['s'] = $signature;

		$baseUrl = rtrim($baseUrl, '/') . '/' . rtrim($path, '/') . '?' . http_build_query($options);
		return $baseUrl;
	}

	public static function serveImage($path, $options = array())
	{
		if ($path == NULL || $path == '') {
			return null;
		}
		if ($options == NULL) {
			$options = array();
		}
		unset($options['s']);
		$options['b'] = env('AWS_BUCKET');
		ksort($options);
		$baseUrl = env('IMAGE_URL');

		$signKey = 'v-LK4WCdhcfcc%jt*VC2cj%nVpu+xQKvLUA%H86kRVk_4bgG8&CWM#k*b_7MUJpmTc=4GFmKFp7=K%67je-skxC5vz+r#xT?62tT?Aw%FtQ4Y3gvnwHTwqhxUh89wCa_';

		$path = ltrim($path, '/');
		$signature = md5($signKey . ':' . $path . '?' . http_build_query($options));
		$options['s'] = $signature;

		$baseUrl = rtrim($baseUrl, '/') . '/' . rtrim($path, '/') . '?' . http_build_query($options);
		return $baseUrl;
	}
}
