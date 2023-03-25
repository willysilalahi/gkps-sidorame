<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthorizationTypeModel extends Model
{
    use HasFactory;
    protected $table = 'authorization_types';
    public $timestamps = false;
    protected $fillable = [
        'name',
    ];
}
