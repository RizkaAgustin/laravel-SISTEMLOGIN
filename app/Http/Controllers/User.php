<?php

namespace App\Http\Controllers;

use App\ModelUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class User extends Controller
{
    //
    public function index()
    {
        if (!Session::get('login')) {
            return redirect('login')->with('alert', 'Kamu harus login dulu');
        } else {
            return view('user');
        }
    }

    public function login()
    {
        return view('login');
    }

    public function loginPost(Request $request)
    {

        $username = $request->username;
        $password = $request->password;
        $data = ModelUser::where('username', $username)->first();
        if ($data) { //apakah email tersebut ada atau tidak
            if (Hash::check($password, $data->password)) {
                Session::put('name', $data->name);
                Session::put('email', $data->email);
                Session::put('login', TRUE);
                return redirect('dashboard');
            } else {
                return redirect('login')->with('alert', 'Password atau Username, Salah !');
            }
        } else {
            return redirect('login')->with('alert', 'Password atau Username, Salah!');
        }
    }

    public function logout()
    {
        Session::flush();
        return redirect('login')->with('alert', 'Kamu sudah logout');
    }

    public function register(Request $request)
    {
        return view('register');
    }

    public function registerPost(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:4',
            'username' => 'required',
            'email' => 'required|min:4|email|unique:model_users',
            'password' => 'required',
            'confirmation' => 'required|same:password',

        ]);
        ($request->name);
        $data =  new ModelUser();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->username = $request->username;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect('login')->with('alert-success', 'Kamu berhasil Register');
    }
}
