<?php

namespace App\Http\Controllers;

use App\User as AppUser;
use Illuminate\Http\Request;

class User extends Controller
{
    public function index(){
        return AppUser::all();
        
    }
}
