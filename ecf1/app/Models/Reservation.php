<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    /** @use HasFactory<\Database\Factories\ReservationFactory> */
    use HasFactory;

    protected $fillable = [
        'nom',

    ];

    public function Lien_Reservation_Vers_Client(){
        return $this->belongsTo(Client::class);
    }

    public function Lien_Reservation_Vers_Crenaux(){
        return $this->belongsTo(Crenaux::class);
    }

}
