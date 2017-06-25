<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use Illuminate\Support\Facades\Auth;

class CategoriesController extends Controller
{
    public function getCategories()
    {
    	$categories = Category::all();

    	$response = ['categories' => $categories];

    	return response()->json($response, 200);
    }

    public function attachCategorytoUser(Request $request) {
      Auth::loginUsingId(1);
      $user = Auth::user();

      $user->categories()->detach($user->id);

      // if(Auth::check()){


      //   if (isset($request->categories)) {
      //       // $user->categories()->sync($request->categories, true);
      //     $user->categories()->attach($user->id);
      //   }
      //   else {
      //       $user->categories()->sync([]);
      //   }
      // }

      return response()->json(['categories' => "test"], 201);
    }
}
