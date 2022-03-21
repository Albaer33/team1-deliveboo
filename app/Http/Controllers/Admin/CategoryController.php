<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::all();

        $data = [
            'categories' => $categories
        ];

        return view('admin.categories.index', $data);
    }

    public function show($slug) {
        $categories = Category::where('slug', '=', $slug)->first();
        $dish = $categories->dishes;

        if(!$categories) {
            abort('404');
        }

        $data = [
            'categories' => $categories,
            'dish' => $dish
        ];

        return view('admin.categories.show', $data);
    }
}
