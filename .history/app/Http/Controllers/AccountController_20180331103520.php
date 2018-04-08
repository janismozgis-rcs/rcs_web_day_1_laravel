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
            'password.same' => 'Yo dwag, passwords are not cool man!'
        ];
        $request->validate($rules);
    }
}
