<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilyModel extends Model
{
    use HasFactory;
    protected $table = 'family';
    protected $fillable = [
        'sectors_id',
        'code',
        'type'
    ];

    function sector()
    {
        return $this->belongsTo(SectorModel::class, 'sectors_id', 'id');
    }

    function persons()
    {
        return $this->hasMany(PersonModel::class, 'family_id', 'id');
    }

    public function getSectorNameAttribute()
    {
        $name = '-';
        if ($this->sector != null) {
            $name = $this->sector->name;
        }
        return $name;
    }
}
