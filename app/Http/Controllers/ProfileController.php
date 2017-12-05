<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class ProfileController extends Controller
{
    public function index()
    {
    	if (!Auth::check()) {
			return redirect('/home');
		} else {
			$user = User::find(Auth::id());

			return view('profile')
				->with('css', 'css/profile.css')
				->with('title', 'Profile')
				->with('user', $user);
		}
    }
}
