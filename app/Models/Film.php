<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $fillable=[
        'code',
        'title',
        'date',
        'synopsis',
    ];

    public function schedule()
    {
        return $this->hasMany(Schedule::class);
    }
}
