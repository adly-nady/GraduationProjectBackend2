<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job_title extends Model
{
    use HasFactory;
    protected $table = "job_title";
    protected $fillable = ['name'];
}
