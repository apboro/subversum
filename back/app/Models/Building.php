<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    use HasFactory;

    protected $fillable = ['type'];
    public $timestamps = false;

    public function buldings_map()
    {
        return $this->hasMany(BuildingMap::class);
    }

}
