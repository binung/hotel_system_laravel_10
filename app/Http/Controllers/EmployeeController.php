<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /** index page */
    public function employeesList()
    {
        return view('employees.employees_list');
    }
}
