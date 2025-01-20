<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class info_api extends Model
{
    use HasFactory;
    protected $table = "info_api";
    protected $fillable = ['id', 'HTTP_Method', 'Endpoint', 'Description', 'Parameters', 'Response_Example', 'style', 'created_at', 'updated_at'];
}
