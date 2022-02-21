<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['service_designation', 'service_description', 'statut_id', 'service_date_creation', 'service_date_creation_par', 'service_derniere_modif', 'service_date_derniere_modif_par'];
}
