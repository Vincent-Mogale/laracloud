<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Category;

class PostController extends Controller
{
    public function index(Request $res)
    {
        $category = Category::where('name', $res->id)->first();
        $services = Service::where('category_id', $category->id)->get();

        return response()->json(array(['services' => $services]));
    }
}
