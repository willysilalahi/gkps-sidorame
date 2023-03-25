<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthorizationModel extends Model
{
    use HasFactory;
    protected $table = 'authorizations';
    public $timestamps = false;
    protected $fillable = [
        'roles_id',
        'menus_id',
        'authorization_types_id',
    ];

    function role()
    {
        return $this->belongsTo(RoleModel::class, 'roles_id', 'id');
    }

    function menu()
    {
        return $this->belongsTo(MenuModel::class, 'menus_id', 'id');
    }

    function auth_type()
    {
        return $this->belongsTo(AuthorizationTypeModel::class, 'authorization_types_id', 'id');
    }
}
