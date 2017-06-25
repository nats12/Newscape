<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function getCategories()
    {
    	$categories = Category::all();

    	$response = ['categories' => $categories];

    	return $response()->json($response, 200);
    }
}
