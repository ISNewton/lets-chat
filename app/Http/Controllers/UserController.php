<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{
    //
    public function search(Request $request) {
        $users = User::where('username' , $request->username)
            ->where('id' , '!=' , auth()->id())
        ->get();
        return $users;
    }
}
