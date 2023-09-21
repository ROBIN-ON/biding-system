<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelPainting extends Model
{
    use HasFactory;
    protected $table = "painting";
    protected $primaryKey = "painting_id";
}
