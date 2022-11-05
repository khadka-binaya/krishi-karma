<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
  //
  public function index()
  {
    return view('Frontend.form');
  }

  public function store(Request $request)
  {
    $form = new Form;
    $form->fullname = $request->fullname;
    $form->citizenship_number = $request->citizenship_number;
    $form->account_number = $request->account_number;
    $form->c_address = $request->c_address;
    $form->p_address = $request->p_address;
    $form->save();
    return redirect('form')->with('status', 'Your form has been submitted');
  }

  public function show()
  {
    $data['forms'] = Form::all();
    return view('Backend.form.index', compact('data'));
  }
}
