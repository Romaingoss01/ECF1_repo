<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    /** @use HasFactory<\Database\Factories\ClientFactory> */
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'age',
        'genre',
    ];

    public function Lien_Client_vers_Reservation(){
        return $this->hasMany(Reservation::class);
    }
}
