<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryCrudController extends Controller
{
  //
  public function createCategory(Request $request)
  {
    $category = Category::where('parent_id', null)->orderby('name', 'asc')->get();
    if ($request->method() == 'GET') {
      return view('Backend.category.create', compact('categories'));
    }
    if ($request->method() == 'POST') {
      $validator = $request->validate([
        'name' => 'required',
        'slug' => 'required|unique:categories',
        'parent_id' => 'nullable|numeric'
      ]);
      return redirect()->back()->with('success', 'Cateogry Successfull Created!');
    }
  }
}

// public function create()
// {
//   return view('Backend.category.create');
// }
  // public function index()
  // {
  //   return view('Backend.category.index');
  // }
  // public function store(Request $request)
  // {
  //   $this->validate($request, [
  //     'categoryName' => 'required',
  //     'categoryDetails' => 'required',
  //     'categoryPrice' => 'required',
  //   ]);
  //   $category = new Category([
  //     'categoryName' => $request->get('categoryName'),
  //     'categoryDetails' => $request->get('categoryDetails'),
  //     'categoryPrice' => $request->get('categoryPrice')
  //   ]);
  // }
