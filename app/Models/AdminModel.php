<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class AdminModel extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    protected $table = 'admins';
    protected $fillable = [
        'roles_id',
        'name',
        'username',
        'password',
        'is_active',
        'token',
        'profile_image_path'
    ];

    function role()
    {
        return $this->belongsTo(RoleModel::class, 'roles_id', 'id');
    }
}
