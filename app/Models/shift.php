<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shift extends Model
{
    use HasFactory;
    protected $table = "shifts";
    protected $fillable = ['id', 'name', 'start_at_p2', 'start_at_p1', 'end_at_p2', 'end_at_p1', 'grace_period'];
}
