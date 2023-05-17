<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index() {
        $user = User::find(auth()->id());
        /* dd($user->chats); */
        return Inertia::render('Home' , [
            'chats' => $user->chats(),
        ]);
    }
}
