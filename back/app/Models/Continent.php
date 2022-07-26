<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    public $timestamps = false;

    public function planets()
    {
        return $this->belongsTo(Planet::class);
    }

    public function regions()
    {
        return $this->hasMany(Region::class);
    }


}
