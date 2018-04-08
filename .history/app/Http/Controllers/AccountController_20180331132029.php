<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Hash;

class AccountController extends Controller 
{
    public function storeUser(Request $request) {
        $rules = [
            'username' => 'required|unique:users,email',
            'first_name' => 'required',
            'password' => 'required|min:8|same:password2'
        ];
        $messages = [
            'password.same' => 'Yo dwag, passwords are not cool man!',
            'first_name.required' => 'Yo dwag, need some name man!!',
        ];
        $request->validate($rules, $messages);

        // everything is cool
        $userData = [
            'email' => $request->get('username'),
            'password' => Hash::make($request->get('password')),
            'name' => $request->get('first_name'),
            'surname' => $request->get('fast_name'),
        ];
        DB::table('users')->insert($userData);
        Session::flash('success', 'yay, you are cool dawg!');
        return redirect()->back();
    }

    public function saveChatMessage(Request $request){
        dd(321);
    }
}
