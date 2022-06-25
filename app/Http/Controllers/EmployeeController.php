<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{
    public function getEmployee() {
        return response()->json(Employee::all(), 200);
    }
}
