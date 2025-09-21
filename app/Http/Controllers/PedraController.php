<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pedras;

class PedraController extends Controller
{

    public readonly Pedras $pedras;

    public function __construct()
    {
        $this->pedras = new Pedras();
    }

    public function index()
    {
        $pedras = Pedras::latest()->get();
        return view('pedras', compact('pedras'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Pedras $pedras)
    {
        return view('pedras_create', $pedras);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'imagem' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'descricao' => 'nullable|string',
        ]);

        $path = null;
        if ($request->hasFile('imagem')) {
            $path = $request->file('imagem')->store('pedras', 'public');
        }

        \App\Models\Pedras::create([
            'nome' => $request->nome,
            'imagem' => $path,
            'descricao' => $request->descricao,
        ]);

        return redirect()->route('pedras.index')->with('success', 'Pedra cadastrada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
