<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pedras;

class HomeController extends Controller
{
    public readonly Pedras $pedras;

    public function __construct()
    {
        $this->pedras = new Pedras();
    }

    public function index(Pedras $pedras)
    {
        $pedras = Pedras::select('nome','imagem')->get();
        return view('home', compact('pedras'));
    }
}
