<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectorModel extends Model
{
    use HasFactory;
    protected $table = 'sectors';
    public $timestamps = false;

    function family()
    {
        return $this->hasMany(FamilyModel::class, 'sectors_id', 'id')->withTrashed();
    }

    public function getTotalPersonAttribute()
    {
        // variabel->link_photo
        $count = 0;
        $data = SectorModel::where('id', $this->id)->with(['family' => function ($qr) {
            $qr->withCount('persons');
        }])->orderBy('id', 'asc')->get();
        foreach ($data as $i) {
            foreach ($i->family as $j) {
                $count += $j->persons_count;
            }
        }
        return $count;
    }

    public function getFamilyLastCodeAttribute()
    {
        $n = count($this->family) + 1;
        $code = 'S0' . $this->id . '-' . sprintf("%03d", $n);
        return  $code;
    }
}
