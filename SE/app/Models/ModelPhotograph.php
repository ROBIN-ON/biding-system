<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelPhotograph extends Model
{
    use HasFactory;
    protected $table = "photograph";
    protected $primaryKey = "photograph_id";
}
