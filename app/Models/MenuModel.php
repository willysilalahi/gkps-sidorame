<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuModel extends Model
{
    use HasFactory;
    protected $table = 'menus';
    public $timestamps = false;
    protected $fillable = [
        'parent_id',
        'name',
        'is_child',
        'route',
        'icon',
    ];

    function role()
    {
        return $this->belongsTo(RoleModel::class, 'roles_id', 'id');
    }

    function child()
    {
        return $this->hasMany(MenuModel::class, 'parent_id', 'id');
    }

    function auth()
    {
        return $this->hasMany(AuthorizationModel::class, 'menus_id', 'id');
    }
}
