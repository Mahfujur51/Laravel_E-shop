<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Notifications\VerifyRegistration;
use App\User;
use Auth;
use Session;
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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login(Request $request)
    {
        $request->validate([
           'email' => 'required|email',
           'password' => 'required|string',
       ]);
        $user=User::Where('email',$request->email)->first();
        if ($user->status==1) {
            //login this user

            if (Auth::gard('web')->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember)) {
                return redirect()->intended(route('index'));
                # code...
            }


        }else{
            //send him a token again

            if (!is_null($user)) {
                $user->notify(new VerifyRegistration($user));
                Session::flash('success','A new confirmation email has sent to you . Please Cheek your Email and Confirm your email');
                return redirect('/');
            }else{
                Session::flash('info','Please Login first');
                return redirect('login');

            }

        }

    }
}
