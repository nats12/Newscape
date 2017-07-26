<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Category;


class CategoriesController extends Controller
{   
  /**
   * [getCategories description]
   * @return [type] [description]
   */
    public function getCategories()
    {
    	$categories = Category::all();

    	$response = ['categories' => $categories];

    	return response()->json($response, 200);
    }

    /**
     * [attachCategorytoUser description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function attachCategoryToUser(Request $request) {

      $user_id = $request->user['id'];
      
      Auth::loginUsingId($user_id);
      
      $user = Auth::user();

      $user->categories()->sync($request->categories, true);

      // if(Auth::check()){


      //   if (isset($request->categories)) {
      //       // $user->categories()->sync($request->categories, true);
      //     $user->categories()->attach($user->id);
      //   }
      //   else {
      //       $user->categories()->sync([]);
      //   }
      // }

      return response()->json(['categories' => $user->categories], 201);
    }
}
