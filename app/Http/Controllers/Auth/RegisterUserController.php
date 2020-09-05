<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
Use App\Wali;
Use App\User;

class RegisterUserController extends Controller
{
    public function index()
    {
        return view('auth.register_user', [
            'message' => ''
        ]);
    }

    public function registerUser(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:user',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $insert = User::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password_confirmation),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'level' => 'user'
        ]);

        // Wali::create([
        //     'user_id' => $request->
        //     'nama' => $request->name,
        //     'no'
        // ])

        if ($insert) {
            return view('auth.register_user', [
                'message' => 'Succes add user, add user again or back to dashboard'
            ]);
        } else {
            return view('auth.register_user', [
                'message' => 'Failed add user, try again or back to dashboard'
            ]);
        }
    }
}
