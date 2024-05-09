<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\User;
use App\Rules\IsTest;
use Illuminate\Http\Request;

class FormControllerNew extends Controller
{
    public function form(Request $request)
    {

    //   $request->validate(['utm'=>'required|max:3']);
        $validator = validator()->make(
            ['utm' => '103'],
            ['utm' => new IsTest()]
        )->validate();

        dd($validator);
return $validator;

    }
    public function viewForm(Request $request)
    {
        $user = City::query()
            ->where('id','=', 99884)
            ->orWhere('id','=','33')
            ->get()->toArray();
dd($user);
       return view('welcome' , ['cities' =>  $user]);
    }
}
