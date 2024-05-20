<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sucursal;

class SucursalController extends Controller
{

    public function index()
    {
        $sucursal = Sucursal::all();
        return view('sucursalIndex', compact('sucursal'));
    }


    public function create()
    {
        return view('sucursalCreate');
    }

    public function store(Request $request)
    {
        Sucursal::create($request->all());
        return redirect('/sucursales');
    }


    public function show(Sucursal $sucursal)
    {
        return view('sucursalShow', compact('sucursal'));
    }


    public function edit(Sucursal $sucursal)
    {
        return view('sucursalEdit', compact('sucursal'));
    }


    public function update(Request $request, Sucursal $sucursal)
    {
        $request->validate([
            'nombre_sucursal' => 'required|string|max:255',
        ]);

        $sucursal->update($request->all());

        return redirect()->route('sucursales')->with('success', 'Sucursal actualizada correctamente.');
    }


    public function destroy(Sucursal $sucursal)
    {
        $sucursal->delete();
        Session()->flash('success', 'Se ah eliminado con exito');
        return redirect('/sucursales');
    }
}
