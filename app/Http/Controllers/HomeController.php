<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class HomeController extends Controller
{
    public function index()
    {
        return 'Hola desde el controlador';
    }

    public function show()
    {
        $fecha = now()->format('d-m-y');

        return view ('show', compact('fecha'));
    }
}
