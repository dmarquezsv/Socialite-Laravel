<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class FacebookController extends Controller
{
    public function getuser(){
        $user = Socialite::driver('facebook')->user();
        dd($user);
    }
    
}
