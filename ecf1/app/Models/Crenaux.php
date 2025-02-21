<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crenaux extends Model
{
    /** @use HasFactory<\Database\Factories\CrenauxFactory> */
    use HasFactory;

    protected $fillable = [
        'debut',
        'fin',
    ];

    public function Lien_Crenaux_vers_Cours(){
        return $this->belongsTo(Cour::class);
    }

    public function Lien_Crenaux_vers_Reservation(){
        return $this->hasMany(Reservation::class);
    }


}
