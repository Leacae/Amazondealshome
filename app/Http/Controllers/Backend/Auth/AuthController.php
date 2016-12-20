<?php

namespace App\Http\Controllers\Backend\Auth;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    use AuthenticatesUsers,ThrottlesLogins;

    protected  $loginView='backend.auth.login';

    protected  $redirectAfterLogout='/dashboard/login';

    protected $redirectPath='/dashboard';

    protected $redirectTo = '/dashboard';


    /**
     * Create a new authentication controller instance.
     *
     * AuthController constructor.
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'getLogout']);
    }
}
