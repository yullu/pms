<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicinesStock extends Model
{
    use HasFactory;

    public function getmedicinename()
    {
        return $this->belongsTo(Medicine::class,'medicine_id');
    }
}
