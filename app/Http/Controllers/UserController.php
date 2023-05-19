<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class UserController extends Controller
{
    //
    public function search(Request $request) {
        $users = User::where('username' , $request->username)
            ->where('id' , '!=' , auth()->id())
        ->get();

    return Redirect::back()->with([
        's' => 34343434343,
    ]);

    return redirect()->back()->with([
        'aaaaaaaaaaaaaa' => 34343434343,
        'users' => $users,
    ]);
    }
}
