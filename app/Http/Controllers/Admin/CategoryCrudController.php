<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryCrudController extends Controller
{
    //
    public function create()
    {
        return view('Backend.category.create');
    }
    public function index()
    {
        return view('Backend.category.index');
    }
}
