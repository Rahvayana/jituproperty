<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable=[
        'code',
        'schedule_id',
        'chair',
    ];

    public function schedule() {
        return $this->belongsTo(Schedule::class);
    }
}
