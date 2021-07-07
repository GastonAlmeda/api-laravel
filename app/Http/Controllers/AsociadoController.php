<?php

namespace App\Http\Controllers;

use App\Models\Asociado;


class AsociadoController extends Controller
{
    public function index(){
        return view('index', [
            'asociados' => Asociado::latest()->paginate()
        ]);
    }
}
