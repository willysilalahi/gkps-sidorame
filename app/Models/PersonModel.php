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

    public function getSectorNameAttribute()
    {
        $name = '-';
        if ($this->family != null) {
            $name = $this->family->sector->name;
        }
        return $name;
    }

    public function getBaptisDateFormatAttribute()
    {
        $format = '-';
        if ($this->baptis == 1 && $this->date_of_baptis != null) {
            $format = date('d F Y', strtotime($this->date_of_baptis));
        }
        return $format;
    }

    public function getSidiDateFormatAttribute()
    {
        $format = '-';
        if ($this->sidi == 1 && $this->date_of_sidi != null) {
            $format = date('d F Y', strtotime($this->date_of_sidi));
        }
        return $format;
    }

    public function getWeddingDateFormatAttribute()
    {
        $format = '-';
        if ($this->date_of_wedding != null) {
            $format = date('d F Y', strtotime($this->date_of_wedding));
        }
        return $format;
    }

    public function getStatusBaptisAttribute()
    {
        $status = '-';
        if ($this->baptis != null) {
            if ($this->baptis == 1) {
                $status = 'Sudah Baptis';
            } else {
                $status = 'Belum Baptis';
            }
        }
        return $status;
    }

    public function getStatusSidiAttribute()
    {
        $status = '-';
        if ($this->sidi != null) {
            if ($this->sidi == 1) {
                $status = 'Sudah Sidi';
            } else {
                $status = 'Belum Sidi';
            }
        }
        return $status;
    }
}
