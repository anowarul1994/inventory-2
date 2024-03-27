<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function adminLoginFormShow()
    {
        if(Auth::user()){
            return redirect()->back();
        }
        return view("auth.login");
    }
}
