<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function info(Request $request) {
        $id = $request->user()?->id;

        return User::select('id', 'name', 'email')->where('id', $id)->first();
    }
}
