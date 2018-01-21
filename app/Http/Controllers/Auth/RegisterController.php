<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Admin;
use Auth;

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

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/fill teller';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'age' => 'required|integer|max:255',
            'gender' => 'required|string|max:255',
            'school' => 'required',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'inspiration' => 'required',
            'handicap' => 'nullable|string|max:255',
            'phone_number' => 'required|string|max:255',
            'phone_number2' => 'required|string|max:255',
            'parent_name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'church' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
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
        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'age' => $data['age'],
            'gender' => $data['gender'],
            'school' => $data['school'],
            'city' => $data['city'],
            'state' => $data['state'],
            'inspiration' => $data['inspiration'],
            'handicap' => $data['handicap'],
            'phone_number' => $data['phone_number'],
            'phone_number2' => $data['phone_number2'],
            'parent_name' => $data['parent_name'],
            'address' => $data['address'],
            'church' => $data['church'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
