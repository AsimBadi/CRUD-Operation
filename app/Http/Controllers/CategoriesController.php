<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function listCategories() {
        $categories = Category::get();
        return view('create', compact('categories'));
    }
}
