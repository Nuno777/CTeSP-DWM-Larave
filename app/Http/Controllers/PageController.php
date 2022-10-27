<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function planocurricular()
    {
        return view('planocurricular');
    }

    public function projetos()
    {
        return view('projetos');
    }

    public function contactos()
    {
        return view('contactos');
    }
}
