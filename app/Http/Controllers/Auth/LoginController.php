<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;
use DB;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }

    
    // public function login(){
    //     $users = User::all();
        
    //     $email = $_POST['email'];
    //     $password = $_POST['password'];

    //     $count=0;
        
    //     foreach ($users as $user) {
    //         if ($user['j_emailAddress'] == $email ||  $user['c_contactEmailAddress'] == $email || $user['c_companyEmailAddress'] == $email){
    //             $count++;
    //         }
    //     }
    //     if($count>0){
    //         $p1 = DB::table('users')->where('j_emailAddress', $email)->select('password')->first();
            
    //         if($p1 != null){
    //             $pwd1 = $p1->password;
    //         }
    //         else {
    //             $pwd1='';
    //         }

    //         $p2 = DB::table('users')->where('c_contactEmailAddress', $email)->select('password')->first();
            
    //         if($p2 != null){
    //             $pwd2 = $p2->password;
    //         }
    //         else {
    //             $pwd2='';
    //         }

    //         $p3 = DB::table('users')->where('c_companyEmailAddress', $email)->select('password')->first();
            
    //         if($p3 != null){
    //             $pwd3 = $p3->password;
    //         }
    //         else {
    //             $pwd3='';
    //         }

    //         if( Hash::check($password, $pwd1)  ||  Hash::check($password, $pwd2) || Hash::check($password, $pwd3)  ){
    //             return redirect('/home')->with('success', 'You are successfully authenticated');
                
    //         }
    //         else {
    //             return redirect('/home')->with('error', 'Login failed please try again');
    //         }
            
               
    //     }
    //     else{
    //         return "email does not exists";
    //     }

        

    // }
    
}
