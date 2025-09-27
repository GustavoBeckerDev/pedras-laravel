<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Pedras;

class PedraController extends Controller
{

    public readonly Pedras $pedras;

    public function __construct()
    {
        $this->pedras = new Pedras();
    }

    public function index(Pedras $pedras)
    {
        $pedras = Pedras::all();
        return view('pedras', compact('pedras'));
    }

    public function create(Pedras $pedras)
    {
        return view('pedras_create', $pedras);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string|max:1000',
            'imagem' => 'required|image|mimes:jpg,jpeg,png|max:2048',
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
        $pedra = Pedras::findOrFail($id);
        return view('pedras_show', compact('pedra'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string|max:1000',
            'imagem' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $pedra = Pedras::findOrFail($id);

        $pedra->nome = $request->nome;
        $pedra->descricao = $request->descricao;

        if ($request->hasFile('imagem')) {
            // Remove a imagem antiga se existir
            if ($pedra->imagem) {
                Storage::disk('public')->delete($pedra->imagem);
            }

            $path = $request->file('imagem')->store('pedras', 'public');
            $pedra->imagem = $path;
        }

        $pedra->save();

        return redirect()->route('pedras.index', $pedra->id)->with('success', 'Pedra atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->pedras->where('id', $id)->delete();
        return redirect()->route('pedras.index');
    }
}
