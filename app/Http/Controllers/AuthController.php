<?php

namespace App\Http\Controllers;

use App\Models\Users;
use GuzzleHttp\Client;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class AuthController extends Controller
{
    public function Login()
    {
        if (Auth::check()) {
            return redirect('dashboard');
        }
        else {
            return view('modules.auth.login');
        }
    }

    public function DoLogin(Request $request)
    {
        $status = false;
        $message = '';

        if ($request->username && $request->password) {
            $user = Users::where('username', $request->username)->where('status', 1)->with('hasGroup')->first();
            if ($user) {
                if (hash_pbkdf2('sha512', $request->password, env('APP_SALT'), env('APP_ITERATIONS'), env('APP_LENGTH')) == $user->password) {
                    Session::put('user_id', $user->user_id);
                    Session::put('username', $user->username);
                    Session::put('name', $user->name);
                    Session::put('group_name', $user->hasGroup->name);
                    // Session::put('user_id', $user->user_id);
                    // Session::put('user_id', $user->user_id);
                    Auth::login($user);
                    $status = true;
                }
                else {
                    $message = 'Username / Password Salah!';
                }
            } else {
                $message = 'Username / Password Salah!';
            }
        } else {
            $message = 'Mohon isi seluruh field terlebih dahulu';
        }   

        return [
            'status' => $status,
            'message' => $message
        ];
    }

    public function Logout()
    {
        Session::flush();
        return redirect('/');
    }

    public function GenPassword()
    {
        echo hash_pbkdf2('sha512', '1', env('APP_SALT'), env('APP_ITERATIONS'), env('APP_LENGTH'));
    }
}
