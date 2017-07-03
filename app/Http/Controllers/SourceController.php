<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SourceController extends Controller
{	
	/**
	 * [getCategories description]
	 * @return [type] [description]
	 */
    public function getSources()
    {
    	$sources = Source::all();

    	$response = ['sources' => $sources];

    	return response()->json($response, 200);
    }


    /**
     * [attachCategorytoUser description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function attachSourceToUser(Request $request) {

      Auth::loginUsingId(1);

      $user = Auth::user();

      $user->sources()->sync($request->sources, true);

      return response()->json(['sources' => $user->sources], 201);
    }

}
