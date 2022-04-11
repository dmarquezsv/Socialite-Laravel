<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class InstagramController extends Controller
{
    public function getuser(){
        
        $user = Socialite::driver('instagram')->user();
        dd($user);
    
    }
}
