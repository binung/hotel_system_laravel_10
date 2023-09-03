<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserManagementController extends Controller
{
    /** user list */
    public function userList()
    {
        return view('usermanagement.listuser');
    }
}
