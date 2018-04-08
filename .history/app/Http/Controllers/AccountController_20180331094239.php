<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function storeUser(Rrequest $request) {
        $rules = [
            'username' => 'required',
            'first_name' => 'required',
            'password' => 'required|min:8|same:password2'
        ];
        $validation = $request->validate($rules);
        dd($validation);
    }
}
