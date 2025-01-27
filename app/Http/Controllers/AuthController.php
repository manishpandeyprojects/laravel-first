<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            return redirect()->route('home.index');
        }

        Session::flash('message', 'User Logged in successfully');


        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ]);
    }


    public function register_view()
    {
        return view('auth.register');
    }


    public function register_save(RegisterRequest $request)
    {
        $obj = new User();

        $obj->name = $request->name;
        $obj->email = $request->email;
        $obj->password = Hash::make($request->password);

        $obj->save();

        Auth::login($obj);

        Session::flash('message', 'User register successfully');

        return redirect()->route('home.index');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
}
