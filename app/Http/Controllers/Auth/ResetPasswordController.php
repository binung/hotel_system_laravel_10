<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\User;
use Hash;
use Brian2694\Toastr\Facades\Toastr;

class ResetPasswordController extends Controller
{
    public function getPassword($token)
    {

       return view('auth.passwords.reset', ['token' => $token]);
    }
    public function updatePassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required',
        ]);

        $updatePassword = DB::table('password_resets')->where(['email' => $request->email, 'token' => $request->token])->first();
        if (!$updatePassword) {
            Toastr::error('Invalid token! :)','Error');
            return back();
        } else {
            $user = User::where('email', $request->email)->update(['password' => Hash::make($request->password)]);
            DB::table('password_resets')->where(['email'=> $request->email])->delete();
            Toastr::success('Your password has been changed! :)','Success');
            return redirect('/login');
        }
       
    }
}
