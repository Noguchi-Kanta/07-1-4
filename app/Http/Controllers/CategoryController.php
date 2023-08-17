<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\PostRequest;
use App\Models\Category;

class CategoryController extends Controller
{
  public function index(Category $category)
  {
      return view('categories.index')->with(['posts' => $category->getByCategory()]);
  }
}