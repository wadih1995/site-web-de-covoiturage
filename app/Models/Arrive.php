<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arrive extends Model
{
    use HasFactory;

    protected $fillable = ['depart_id', 'endroit_arrive','distance','prix','duree'];
}
