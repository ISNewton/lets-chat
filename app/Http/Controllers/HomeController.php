<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index(Request $request) {
        $user = User::find(auth()->id());
        /* dd($user->chats); */
        $users = [];

        if($request->username) {
                $users = User::where('username' ,'LIKE', "%$request->username%")
                    ->where('id' , '!=' , auth()->id())
                ->get();
        }

        return Inertia::render('Home' , [
            'chats' => $user->chats(),
            'users' => $users,
        ]);
    }
}
