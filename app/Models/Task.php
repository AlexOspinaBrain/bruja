<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function ciudadano() {
        return $this->belongsTo(Ciudadano::class,'ciudadanos_id');
    }

    public function day() {
        return $this->belongsTo(Day::class, 'day_id');
    }
}
