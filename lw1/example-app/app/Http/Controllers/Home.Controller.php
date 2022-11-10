<?php

namespace App\Http\HomeControllers;

use Illuminate\Http\Request;
use Illuminate\View\View;


class HomeController extends Controller
{
    public function index(): View
    {
        return view('home', [
            'catone' => 'Сингапура ',
            'discriptionone' => 'описание',
            'cattwo' => 'Пиксибоб',
            'discriptiontwo' => 'описание',
            'catthree' => 'Британская короткошерстная',
            'discriptionthree' => 'описание',
        ]);
    }
}
