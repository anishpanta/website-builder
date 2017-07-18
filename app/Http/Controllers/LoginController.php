<?php
 namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use App\User;
use App\Superuser;
class LoginController extends Controller {

	public function getLogin(){
		
		return view('start');
	}
	public function getDologin(){
		
		return view('login');
	}
	public function postDologin()
	{
		
		if(Auth::attempt(['username'=>Input::get('username'), 'password'=>Input::get('password')]))
			return redirect('/');

		else
			return redirect('/login/dologin')->with('error','Invalid Username Or Password');
	}	
	
	public function getLogout(){
		Auth::logout();
		return redirect('/')->with('success','You are Logged Out');
	}
	public function getChangepassword(){
		return view('changepassword');
	}
	public function postChangepassword(){
		$user=Auth::User()->id;
		$odata=User::find($user);
		//$old=$odata->password;
		//dd($old);
		//dd(Hash::make(Input::get('oldpassword')));
		   				
				$odata->username=Input::get('username');
		        $odata->password=Hash::make(Input::get('newpassword'));
		        $odata->save();
		        return redirect('/login/dologin')->with('success','Password changed. Login to continue!');
    		
    	
    		//return redirect('/changepassword')->with('error','Incorrect Old password');
	}
	public function getSignup(){
		return view('signup');
	}
	public function postSignup(){
		if(Input::get('password')==Input::get('repassword'))
			{
			$user=new User();
			$user->username=Input::get('username');
			$user->password=Hash::make(Input::get('password'));
			$user->save();
			return redirect('/login/dologin')->with('success','User is created. Sign In to continue');
			}
		else
			return redirect('/login/signup')->with('error','Passwords dont match. Please try again!!');
		}
	public function getSuperlogin(){
		return view('superlogin');
	}
	public function postSuperlogin(){
		if(Auth::attempt(['username'=>Input::get('username'), 'password'=>Input::get('password')]))
			return redirect('/admin');

		else
			return redirect('/login/superlogin')->with('error','Invalid Username Or Password');
	}
	public function getSupersignup(){
		return view('supersignup');
	}
	public function postSupersignup(){
		if(Input::get('password')==Input::get('repassword'))
			{
			$user=new Superuser();
			$user->username=Input::get('username');
			$user->password=Hash::make(Input::get('password'));
			$user->save();
			return redirect('/login/superlogin')->with('success','Superuser is created. Sign In to continue');
			}
		else
			return redirect('/login/supersignup')->with('error','Passwords dont match. Please try again!!');
	}

}
