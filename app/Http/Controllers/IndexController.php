<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    function index(){
        return view('index');

    }

    function cadastro(){
        return view('cadastro');
    }

    function cadastro_colaborador(){
        return view('cadastro_colaborador');
    }




}
