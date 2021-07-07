<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Asociado;
use App\Http\Requests\AsociadoRequest;
use DateTime;
use Illuminate\Http\Request;



class AsociadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Asociado::latest()->paginate();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AsociadoRequest $request)
    {
        $f = new DateTime(now());

        $fecha = $f->format('Y-m-d H:m:s');

        $asociado = Asociado::create([

            'fechaIngreso'=> $fecha

        ] + $request->all());

        return response()->json($asociado, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Asociado  $asociado
     * @return \Illuminate\Http\Response
     */
    public function show(Asociado $asociado)
    {
        return $asociado;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Asociado  $asociado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $asociado = Asociado::findOrFail($id);

        $asociado->update($request->all());

        return response()->json($asociado, 200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Asociado  $asociado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asociado $asociado)
    {
        $asociado->delete();
        
        return response()->json(null, 204);
    }
}
