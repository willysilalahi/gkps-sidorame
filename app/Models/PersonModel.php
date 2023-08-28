<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PDO;

class PersonModel extends Model
{
    use HasFactory;
    protected $table = 'persons';
    protected $fillable = [
        'family_id',
        'name',
        'gender',
        'place_of_birth',
        'date_of_birth',
        'categorial',
        'baptis',
        'sidi',
        'date_of_baptis',
        'date_of_sidi',
        'date_of_wedding'
    ];

    function family()
    {
        return $this->belongsTo(FamilyModel::class, 'family_id', 'id');
    }


    public function getBirthTextAttribute()
    {
        $text = '';
        if ($this->place_of_birth != null) {
            $text = $text . $this->place_of_birth;
        }
        if ($this->date_of_birth != null) {
            if ($this->place_of_birth != null) {
                $text = $text . ', ' . date('d F Y', strtotime($this->date_of_birth));
            } else {
                $text = $text . date('d F Y', strtotime($this->date_of_birth));
            }
        }
        return $text;
    }

    public function getCategorialTextAttribute()
    {
        switch ($this->categorial) {
            case 1:
                return 'Bapa';
            case 2:
                return 'Inang';
            case 3:
                return 'Namaposo';
            default:
                return 'Sekolah Minggu';
        }
    }

    public function getGenderTextAttribute()
    {
        switch ($this->gender) {
            case 1:
                return 'Laki-Laki';
            default:
                return 'Perempuan';
        }
    }
}
