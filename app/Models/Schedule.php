<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable=[
        'code',
        'film_id',
        'cinema_id',
        'date_time',
        'chair',
    ];

    public function film() {
        return $this->belongsTo(Film::class);
    }

    public function reservation()
    {
        return $this->hasMany(Reservation::class);
    }
}
