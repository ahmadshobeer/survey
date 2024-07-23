<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelCabang extends Model
{

    protected $table = "m_cabang";
    protected $primaryKey = "kd_cabang";
    use HasFactory;
}
