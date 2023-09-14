<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Hash;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function register()
    {
        // $role = DB::table('role_type_users')->get();
        // return view('auth.register',compact('role'));
        return view('auth.register');
    }
    public function storeUser(Request $request)
    {
        $request->validate([
            'name'      => 'required|string|max:255',
            'email'     => 'required|string|email|max:255|unique:users',
            // 'role_name' => 'required|string|max:255',
            'password'  => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required',
        ]);
        
        $dt       = Carbon::now();
        $todayDate = $dt->toDayDateTimeString();
        
        $user = new User();
        $user->name      = $request->name;
        $user->email     = $request->email;
        $user->join_date = $request->join_date;
        $user->role_name = $request->role_name;
        $user->password  = Hash::make($request->password);
        $user->save();
       
        Toastr::success('Create new account successfully :)','Success');
        return redirect('login');
    }
}
