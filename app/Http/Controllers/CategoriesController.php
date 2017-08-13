<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Exception;
use App\Category;


class CategoriesController extends Controller
{   
  /**
   * [getCategories description]
   * @return [type] [description]
   */
    public ffffunction getCategories()
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

      try {
        $user_id = $request->user['id'];
        
        Auth::loginUsingId($user_id);
        
        $user = Auth::user();

        $user->categories()->sync($request->categories, true);

        return response()->json(['categories' => $user->categories], 201);

      } catch (Exception $e) {
        return response()->json(['error' => $e], 500);
      } 
    }
}
