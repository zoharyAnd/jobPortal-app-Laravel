<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
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

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

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
        if($data['type']=='company'){
            return Validator::make($data, [
                'type' => ['string', 'max:255'],
                'c_companyName' => ['string', 'max:255'],
                'c_contactPersonFullName' => ['string', 'max:255'],
                'postalAddress' => ['string', 'max:255'],
                'email' => ['string', 'email', 'max:255', 'unique:users'],
                'password' => ['string', 'min:8', 'confirmed'],
            ]);
        }
        else if ($data['type']=='jobseeker'){
            return Validator::make($data, [
                'type' => ['string', 'max:255'],
                'j_title' => ['string', 'max:255'],
                'j_lastName' => ['string', 'max:255'],
                'j_firstName' => ['string', 'max:255'],
                'j_contactNumber' => ['string', 'max:255'],
                'j_highestQualificationAchieved' => ['string', 'max:255'],
                'j_cvUploadedStatus' => ['string', 'max:255'],
                'j_skills' => ['string', 'max:255'],
                'postalAddress' => ['string', 'max:255'],
                'email' => ['string', 'email', 'max:255', 'unique:users'],
                'password' => ['string', 'min:8', 'confirmed'],
            ]);
        }
        
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
            'type' => $data['type'],
            'c_companyName' => $data['c_companyName'],
            'c_contactPersonFullName' => $data['c_contactPersonFullName'],
            'j_title' => $data['j_title'],
            'j_lastName' => $data['j_lastName'],
            'j_firstName' => $data['j_firstName'],
            'j_contactNumber' => $data['j_contactNumber'],
            'j_dateOfBirth' => $data['j_dateOfBirth'],
            'j_highestQualificationAchieved' => $data['j_highestQualificationAchieved'],
            'j_cvUploadedStatus' => $data['j_cvUploadedStatus'],
            'j_skills' => $data['j_skills'],
            'postalAddress' => $data['postalAddress'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
