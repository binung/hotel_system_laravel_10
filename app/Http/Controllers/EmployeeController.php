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

    /** employee add */
    public function employeesAdd()
    {
        return view('employees.employee_add');
    }

    /** leaves page */
    public function leavesPage()
    {
        return view('employees.leaves');
    }
}
