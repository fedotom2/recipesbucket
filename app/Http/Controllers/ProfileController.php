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

    public function edit(Request $request)
    {
    	if (!Auth::check()) {
			return redirect('/home');
		} else {
			$this->validate($request, [
	            'name' => 'required|max:255',
	            'lastname' => 'required|max:255',
	            'about' => 'required'
	        ]);

	        $data = $request->all();

			User::where('id', Auth::id())
				->update(array(
					'name' => $data['name'],
					'lastname' => $data['lastname'],
					'about' => $data['about'],
				));

			return redirect('/profile');
		}
    }

    public function show($id)
    {
    	if (!Auth::check()) {
			return redirect('/home');
		} else {
			$user = User::find($id);

			return view('profile')
				->with('css', 'css/profile.css')
				->with('title', 'Profile')
				->with('user', $user);
		}
    }
}
