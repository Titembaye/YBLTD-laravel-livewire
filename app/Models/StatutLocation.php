<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatutLocation extends Model
{
    protected $table = "statut_locations";
    use HasFactory;
    public function locations()
    {
        return $this->hasMany(Location::class);
    }
}
