<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    use HasFactory;
    protected $table = "items";
    protected $fillable = ['id', 'name', 'images', 'Description', 'unit_id', 'department_id', 'balance', 'minimum', 'type'];
}
