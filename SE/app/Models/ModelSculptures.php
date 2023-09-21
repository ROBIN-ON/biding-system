<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelSculptures extends Model
{
    use HasFactory;
    protected $table = "sculptures";
    protected $primaryKey = "sculptures_id";
}
