<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class MainController extends Controller
{
    //
    public function __invoke()
    {
        $title = 'Главная страница';
        $desk = 'Текст описания';
        $h1 = 'Главный заголовок';
        $text = 'Тестовый контент';
        View::share('city','Msk-New');
       return view('main', compact('title', 'desk', 'h1', 'text'));
    }
}
