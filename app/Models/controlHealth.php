<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class controlHealth extends Model
{
    use HasFactory;

    protected $fillable = [
      'nomAlumno',
      'numDocumento',
      'edadAlumno',
      'examenMedico',
      'examenVisual',
      'examenAuditivo',
      'examenOdontologico',
      'cdActual',
      'cdProximo',
      'cdEntregado',
    ];
}
