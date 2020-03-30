<?php

namespace App\Http\Controllers;

use App\Model\Auth;
use App\Model\Menu;
use App\Model\Settings;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
    public function forgot_password()
    {
        return view('forgot-password');
    }
    public function postRegister(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'password-confirm' => 'required|min:6|same:password',
        ]);

        $data = new Auth();

        $data->name = "$request->first_name $request->last_name";
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->role_id = 1;
        $data->is_active = 1;
        $data->save();
        if ($data) {
            return $request->session()->flash('message', 'success');
        } else {
            return $request->session()->flash('message', 'failed');
        }
    }
}
