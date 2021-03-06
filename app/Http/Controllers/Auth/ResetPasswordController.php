<?php

namespace App\Http\Controllers\Auth;

use App\Application;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    public function showResetForm(Request $request, $token)
    {
        $account_info = Application::all()->first();
        return view('admin.auth.passwords.reset',['token'=> $token, 'email'=> $request->email, 'account_info' => $account_info]);
    }
    protected $redirectTo = RouteServiceProvider::HOME;
}
