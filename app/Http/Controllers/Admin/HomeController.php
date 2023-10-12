<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index(){
        if(Auth::id()){
            $usertype=Auth()->user()->usertype;

            if($usertype=='user'){
                return view('user.dashboard');
            }
            else if($usertype=='admin'){
                return view('Admin.AdminDashboard');
            }else{
                return redirect()->back();
            }
        }
    }
}
