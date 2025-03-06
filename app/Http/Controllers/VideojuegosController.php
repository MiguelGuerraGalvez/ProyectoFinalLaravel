<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Videojuego;

class VideojuegosController extends Controller
{
    public function index() {
        $videojuegos = Videojuego::paginate(5);
        
        return view('videojuegos.index', compact('videojuegos'));
    }
    
    public function create() {
        return view('videojuegos.create');
    }
    
    public function store(Request $request) {
        $videojuego = new Videojuego();

        $request->validate([
            'nombre' => ['required'],
            'consola' => ['required'],
            'precio' => ['required', 'numeric', 'min:1']
        ]);

        $videojuego->nombre = $request->nombre;
        $videojuego->consola = $request->consola;
        $videojuego->precio = $request->precio;

        $videojuego->save();

        return redirect()->route('videojuegos.index');
    }

    public function edit(Videojuego $videojuego) {
        return view('videojuegos.edit', compact('videojuego'));
    }

    public function update(Request $request, Videojuego $videojuego) {
        $request->validate([
            'nombre' => ['required'],
            'consola' => ['required'],
            'precio' => ['required', 'numeric', 'min:1']
        ]);

        $videojuego->nombre = $request->nombre;
        $videojuego->consola = $request->consola;
        $videojuego->precio = $request->precio;

        $videojuego->save();

        return redirect()->route('videojuegos.index');
    }

    public function delete(Videojuego $videojuego) {
        return view('videojuegos.delete', compact('videojuego'));
    }

    public function destroy(Videojuego $videojuego) {
        $videojuego->delete();

        return redirect()->route('videojuegos.index');
    }
}
