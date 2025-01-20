<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\department;
use App\Models\item;
use App\Models\unit;
use Illuminate\Http\Request;

class QueriesViewController extends Controller
{
    public function GetAllDepartment()
    {
        return department::get();
    }
    public function GetAllUnits()
    {
        return unit::get();
    }
    public function GetAllItems()
    {
        return item::get();
    }
}
