<?php

namespace App\Http\Controllers;

use App\Models\Juguete;
use App\Models\Sucursal;
use Illuminate\Http\Request;

class JugueteController extends Controller
{

    public function index()
    {
        $juguetes = Juguete::all();
        return view('jugueteIndex', compact('juguetes'));
    }


    public function create()
    {
        $sucursales = Sucursal::all();
        return view('juegueteCreate', compact('sucursales'));
    }


    public function store(Request $request)
    {
        // $request->validate([
        //     'NombreJ' => 'required|string',
        //     'PrecioJ' => 'required|numeric',
        //     'GeneroJ' => 'required|string',  
        //     'MaterialJ' => 'required|string',
        //     'ProvedorJ' => 'required|string',
        //     'categoroias' => 'required'
        // ]);

            //Crear el producto
            $juguete = new Juguete();
            $juguete->NombreJ = $request->NombreJ;
            $juguete->PrecioJ = $request->PrecioJ;
            $juguete->GeneroJ = $request->GeneroJ;
            $juguete->MaterialJ = $request->MaterialJ;
            $juguete->ProvedorJ = $request->ProvedorJ;
            $juguete->save();
            

        //Asociar las   Sucursales sleccionadas al juguete
            $juguete->Sucursal()->attach($request->sucursales);

            Session()->flash('success', 'Se ha guardado con extio');
            return redirect('/juguete');
    }


    public function show(Juguete $juguete)
    {
        return view('/jugueteShow',compact('juguete'));
    }

    /**
     * Show the for editing the specified resource.
     */
    public function edit(Juguete $juguete)
    {

        $sucursales = Sucursal::all();
        return view('jugueteEdit', compact('sucursales', 'juguete'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Juguete $juguete)
    {
        $juguete->NombreJ = $request->NombreJ;
        $juguete->PrecioJ = $request->PrecioJ;
        $juguete->GeneroJ = $request->GeneroJ;
        $juguete->MaterialJ = $request->MaterialJ;
        $juguete->ProvedorJ = $request->ProvedorJ;
        $juguete->save();


        if ($request->has('sucursales')) {
            $juguete->Sucursal()->sync($request->sucursales);
        } else {
            $juguete->Sucursal()->detach(); 
        }

        return redirect('/juguete');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Juguete $juguete)
    {
        $juguete->delete();
        Session()->flash('success', 'Se ah eliminado con exito');
        return redirect('/juguete');
    }
}
