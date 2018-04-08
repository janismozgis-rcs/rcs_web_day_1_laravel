<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function storeUser(Request $request) {
        $rules = [
            'username' => 'required',
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
            'username' => $request->get('username'),
            'password' => $request->get('password'),
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
        ];
        dd($request->get('first_name'));
    }
}
