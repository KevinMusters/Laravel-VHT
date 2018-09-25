<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $allCategories = Category::all();

        return view('categories/index', ['categories' => $allCategories]);
    }
}
