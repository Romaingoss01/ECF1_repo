<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cour extends Model
{
    /** @use HasFactory<\Database\Factories\CourFactory> */
    use HasFactory;


    protected $fillable = [
        'nom',
        'id',
    ];

    public function Lien_Cours_Vers_Crenaux(){
        return $this->hasMany(Crenaux::class);
    }
}
