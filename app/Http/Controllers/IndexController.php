<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class IndexController extends Controller
{
    public function index(Request $request){
        $validator = Validator::make($request->all(), [
            'title' => 'required|numeric|max:5',
            'body'  => 'required',
        ]);
        $errors = $validator->errors()->all();
        $message = '';
        if(count($errors)){
            foreach($errors as $error)
                $message .= $error;
            return $message;
        }

        return view('index.index');
    }
}
