<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wine;

class PageController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function nuovaPagina()
    {
        return view('nuova-pagina');
    }

    public function wines()
    {
        $wines = Wine::paginate(20);

        return view('wines', compact('wines'));
    }
}