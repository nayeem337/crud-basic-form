<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class FormData extends Model
{

    private static $form;

    public static function newForm(Request $request)
    {
        self::$form = new FormData();
        self::$form->name  = $request->name;
        self::$form->email = $request->email;
        self::$form->save();
    }

    public static function updateForm($request, $id)
    {
        self::$form = FormData::find($id);
        self::$form->name  = $request->name;
        self::$form->email = $request->email;
        self::$form->save();
    }

    public static function deleteForm($id)
    {
        self::$form = FormData::find($id);
        self::$form->delete();
    }

}
