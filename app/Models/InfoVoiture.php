<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoVoiture extends Model
{
    use HasFactory;
    protected $table = 'info_voiture';
    protected $fillable = ['heure_id', 'marque','heure'];

}




