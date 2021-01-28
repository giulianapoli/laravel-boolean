<?php

namespace App\Http\Controllers;

use DB;

use App\Users;

class UserController extends Controller
{
    public function index() {

        $users = DB::select('select * from users');

        return view('user',['users'=>$users]);
    }

    public function show($id)
    {
        $user = Users::find($id);

        return view('user', compact('user'));
    }
}
?>