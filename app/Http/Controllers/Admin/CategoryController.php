<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::orderBy("name")->get();
        return view("admin.category.index", compact('categories'));
    }
}
