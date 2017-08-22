<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Image;
use Illuminate\Foundation\Auth\User;


class UserController extends Controller
{
  public function profile(){
    return view('profile', array('user' => Auth::user()) );
  }
  public function update_avatar(Request $request){

    	// Handle the user upload of avatar
    	if($request->hasFile('avatar')){
    		$avatar = $request->file('avatar');
    		$filename = time() . '.' . $avatar->getClientOriginalExtension();
    		Image::make($avatar)->resize(300, 300)->save( public_path('/storage/avatars/' . $filename ) );

    		$user = Auth::user();
    		$user->avatar = $filename;
    		$user->save();
    	}
        
    	return view('profile', array('user' => Auth::user()) );

    }

  public function update_cv(Request $request){
        
            $cv= $request->cv;
            $user = Auth::user();
            $user->cv = $cv;
            $user->save();
        
        return view('profile', array('user' => Auth::user()) );

    }

    public function update_email(Request $request){
        
            $email= $request->email;
            $user = Auth::user();
            $user->email = $email;
            $user->save();
        
        return view('profile', array('user' => Auth::user()) );

    }
    public function update_password(Request $request){
        
            $password= $request->password;
            $user = Auth::user();
            $user->password = bcrypt($password);
            $user->save();
        
        return view('profile', array('user' => Auth::user()) );

    }
    public function allUsers(){

    }


    public function modifUser(Request $request, $id){

    }

    public function deleteUser($id){

    }
   

}
