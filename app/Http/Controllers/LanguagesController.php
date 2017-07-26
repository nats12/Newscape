<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Language;


class LanguagesController extends Controller
{   
    /**
     * [attachLanguagetoUser description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function attachLanguageToUser(Request $request) {

      $user_id = $request->user['id'];
      
      Auth::loginUsingId($user_id);
      
      $user = Auth::user();

      $user->languages()->sync($request->languages, true);

      return response()->json(['languages' => $user->languages], 201);
    }
}
