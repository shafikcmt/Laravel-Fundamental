<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PaginationController extends Controller
{
    public function allUser(){
        $users = User::paginate(20);
        return view('users',compact('users'));
    }
}
