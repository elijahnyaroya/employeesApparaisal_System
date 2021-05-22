<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    function registerUsers(Request $req){
        //return $req->input();
        $confrimpassword = $req->confrimpassword;
        $password = $req->password;

        if($password == $confrimpassword){
            $user = new User();
            $user -> fname = $req->fname;
            $user -> lname = $req->lname;
            $user -> tscNumber = $req->tscnumber;
            $user -> IDNo = $req->idno;
            $user -> phone = $req->phone;
            $user -> email = $req->email;
            $user -> gender = $req->gender;
            $user -> notificationType = $req->modeofnotificatio;
            $user -> password = Hash::make($req->password);
            $user->save();
            return  redirect('/login');
        }else{
            return "Password Not Matching";
        }
    }

    function loginUser(Request $req){
        $submit =$req->btnLogins;
        if(isset($submit)){
            $tscNumber = $req->tscNumber;
            $password = $req->password;

            $user = User::where(['tscNumber'=>$req->tscNumber])->first();
            if(!$user || !Hash::check($password,$user->password)){
                return "TSC Number and Password are not matching";
            }
            else{
                //Store user detail in the session manager
                $req->session()->put('user',$user);
                return redirect('/');
            }
        }
    }
}
