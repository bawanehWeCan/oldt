<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Request;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
        \Session::put('reg','reg');
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:tk_users', 'min:4' , 'not_regex:/^.+$/i'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:tk_users'],
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

        $fileName = 'null';
        if (Request::hasfile('userimage')) {
            $destinationPath = public_path('uploads/files/avatars');
            $extension = Request::file('userimage')->getClientOriginalExtension();
            $fileName = uniqid().'.'.$extension;
            $fileName = url('/uploads/files/avatars').'/'.$fileName;
    
            Request::file('userimage')->move($destinationPath, $fileName);
        }

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'username' => $data['username'],
            'image' => $fileName,
            'provider' => 'tkyeem',
            'provider_id' => 'tkyeem',
            'password' => Hash::make($data['password']),
        ]);
    }
}
