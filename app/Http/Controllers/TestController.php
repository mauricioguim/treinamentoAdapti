<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function helloWorld(){
        return view('hello-world');
    }

    public function hello($name = null){
        return 'Hello, '.$name;
    }

    public function index($nome){
        return view('tests.index', ['nome'=>$nome]);
    }

    public function notas(){
        $notas = [
            0 => 'Anotação 1',
            1 => 'Anotação 2',
            2 => 'Anotação 3',
            3 => 'Anotação 4',
            4 => 'Anotação 5',
        ];

        return view('tests.notas', compact('notas'));
    }

    
}
