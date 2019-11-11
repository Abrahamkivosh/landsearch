<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    //guard to use

    protected function guard()
    {
        return Auth::guard('admin');
    }

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    public function showRegistrationForm()
    {
        return view('authAdmin.register');
    }

    protected $redirectTo = '/admin1';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:40'],
            'phone' => ['required', 'string', 'max:15'],
            'nationalId' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:75', 'unique:admins'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        if ($data['job_title'] == null) {
            $value = "Clerk";
        } else {
           $value =  $data['job_title'];
        }

        return Admin::create([
            'name' => $data['name'],
            'nationalId' => $data['nationalId'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'job_title'=>$value,
            'password' => Hash::make($data['password']),
        ]);
    }
}
