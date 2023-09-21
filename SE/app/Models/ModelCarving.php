<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelCarving extends Model
{
    use HasFactory;
    protected $table = "carving";
    protected $primaryKey = "carving_id";
}
