<?php

namespace App\Http\Controllers;

use App\Models\Juguete;
use App\Models\categorias;
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
        return view('juegueteCreate');

        //$categorias = categorias::all();
        //return view('juegueteCreate', compact('categorias'));
    }


    public function store(Request $request)
    {

        //     $request->validate([
        //         'NombreJ' => 'required|string',
        //         'PrecioJ' => 'required|numeric',
        //         'GeneroJ' => 'required|string',
        //         'MaterialJ' => 'required|string',
        //         'ProvedorJ' => 'required|string',
        //         'categoroias' => 'required'
        // ]);

        //     //Crear el producto
        //     $juguete = new Juguete();
        //     $juguete->NombreJ = $request->NombreJ;
        //     $juguete->PrecioJ = $request->PrecioJ;
        //     $juguete->GeneroJ = $request->GeneroJ;
        //     $juguete->MaterialJ = $request->MaterialJ;
        //     $juguete->ProvedorJ = $request->ProvedorJ;
        //     $juguete->save();
            

        //     //Asociar las categorias sleccionadas al juguete

        //     $juguete->categorias()->attach($request->categorias);

        //     Session()->flash('success', 'Se ha guardado con extio');
        //     return redirect('/juguete');

        Juguete::create($request->all());
        return redirect('/juguete');
    }


    public function show(Juguete $juguete)
    {
        // $juguete = Juguete::findOrFail($id);
        // return view('/jugueteShow',compact('juguete'));
        return view('/jugueteShow', compact('juguete'));
    }

    /**
     * Show the for editing the specified resource.
     */
    public function edit(Juguete $juguete)
    {
        // $juguete = Juguete::findOrFail($id);
        // return view('/jugueteEdit',compact('juguete'));
        return view('jugueteEdit', compact('juguete'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Juguete $juguete)
    {
        Juguete::where('id', $juguete->id)->update($request->except('_token','_method', 'action'));
        return redirect('/juguete');

        // $juguete->NombreJ = $request->NombreJ;
        // $juguete->PrecioJ = $request->PrecioJ;
        // $juguete->GeneroJ = $request->GeneroJ;
        // $juguete->MaterialJ = $request->MaterialJ;
        // $juguete->ProvedorJ = $request->ProvedorJ;
        // $juguete->save();


        // if ($request->has('categorias')) {
        //     $juguete->categorias()->sync($request->categorias);
        // } else {
        //     $juguete->categorias()->detach(); 
        // }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Juguete $juguete)
    {
        $juguete->delete();
        //Session()->flash('success', 'Se ah eliminado con exito');
        return redirect('/juguete');
    }
}
