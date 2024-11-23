<?php

namespace App\Http\Controllers;

use App\Models\FormData;
use Illuminate\Http\Request;

class FormCrud extends Controller
{
    public function index()
    {
        return view('admin.dashboard.index');
    }

    public function create(Request $request)
    {
        FormData::newForm($request);
        return back()->with('message', 'Form info create successfully');
    }

    public function manage()
    {
        return view('admin.dashboard.manage',['forms' => FormData::all()]);
    }

    public function edit($id)
    {
        return view('admin.dashboard.edit',['form' => FormData::find($id)]);
    }

    public function update(Request $request, $id)
    {
       FormData::updateForm($request, $id);
       return back()->with('message', 'Form update successfully');
    }
    public function delete($id)
    {
        FormData::deleteForm($id);
        return back()->with('message','Form delete successfully');

    }
}
