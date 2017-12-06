<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Recipe;
use App\User;
use App\Ingredient;

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

			$data = $request->all();

			end($data);
			for ($i = 1; $i <= substr(key($data), 5); $i++)
			{
				$in['name'] = $data['ingredient' . $i];
				$in['value'] = $data['value' . $i];
				$in['recipe_id'] = $recipe->id;

				$ingredient = new Ingredient;
				$ingredient->fill($in);
				$ingredient->save();
			}

			return redirect('/home');
		}
	}

	public function show($id)
	{
		$recipe = Recipe::find($id);
		$author = User::find($recipe->user_id);
		$recipe->author = $author;

		$recipe->recipe = preg_split('/[0-9]\./', $recipe->recipe);

		$ingredients = Ingredient::whereIn('recipe_id', [$id])->get();

		return view('recipe')
			->with('css', 'css/recipe.css')
			->with('title', 'Recipe')
			->with('recipe', $recipe)
			->with('ingredients', $ingredients);
	}

}
