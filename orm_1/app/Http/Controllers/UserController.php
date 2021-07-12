<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    //
    public function search(Request $request){
        $user = new User();
        $users = $user->searchUser($request);
        return view('result',['users' => $users]);
    }
}
