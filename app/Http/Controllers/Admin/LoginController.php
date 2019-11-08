<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    public function test(){
        return "Okay admin";
    }


    use AuthenticatesUsers;
    public function showLoginForm()
    {
        return view('authAdmin.login');
    }

    public function login(Request $request)
    {
        $this->validate($request,[
            'email'=>"required|email",
            'password'=>'required|min:6'
        ]);
        $email = $request->input('email');
        $password = $request->input('password');

       $result =  Auth::guard('admin')->attempt(['email' => $email, 'password' => $password], $request->remember);

            if ($result) {
                return redirect()->intended(route('dashboard'));
            } else {
                return back()->withInput($request->only('email','remember'));
            }

        return "Data sent";
    }


    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin1';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

}
