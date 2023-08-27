<?php

namespace App\Http\Controllers\Api;


use App\Models\Department;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        $departaments = Department::all();
        return response()->json(['data' => $departaments]);
        
    }
}
