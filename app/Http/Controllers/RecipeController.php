<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Recipe;
use App\User;

class RecipeController extends Controller
{
    
	public function index()
	{

		if (!Auth::check()) {
			return redirect('/home');
		} else {
			return view('recipe_add')
				->with('css', '')
				->with('title', 'Recipe add');
		}
	}

	public function add(Request $request)
	{
		if (!Auth::check()) {
			return redirect('/home');
		} else {
			$this->validate($request, [
				'title' => 'required|max:255',
				'description' => 'required',
				'recipe' => 'required'
			]);

			$data = $request->all();
			$data['user_id'] = Auth::id();

			$recipe = new Recipe;
			$recipe->fill($data);
			$recipe->save();

			return redirect('/home');
		}
	}

	public function show($id)
	{
		$recipe = Recipe::find($id);
		$author = User::find($recipe->user_id);

		return view('recipe')
			->with('css', 'css/recipe.css')
			->with('title', 'Recipe')
			->with('recipe', $recipe);
	}

}
