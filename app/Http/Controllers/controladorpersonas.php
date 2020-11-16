<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\personas;
class controladorpersonas extends Controller
{
    public function list(){
    $persona = personas::all();
     return view('list', ['personas' => $persona]);
 }
public function addpersonas(Request $request)
    {
        $fields = request()->validate([
            'nombre' => 'required'
        ]);
        personas::create($fields);
       return redirect()->route('list');
    }
}


