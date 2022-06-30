<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Phone;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user()
    {
        $user = User::find(1);
        // $phone = Phone::where('user_id', $user->id)->first();
        // $p = Phone::find(1);
        // return view('from.user', compact('user'));
    }
}
