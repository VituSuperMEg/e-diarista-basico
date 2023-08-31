<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diaria;

class ListarDiarias extends Controller
{
    public function __invoke(Request $request)
    {
      $diarias = Diaria::get();
      return view('listar_diarias', [
        'diarias' => $diarias
      ]);
    }
}
