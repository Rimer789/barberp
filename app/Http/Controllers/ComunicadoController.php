<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Comunicado;
use Illuminate\Http\Request;

class ComunicadoController extends Controller
{
    public function publicar(Request $request)
    {
        // Crea un nuevo comunicado
        $comunicado = Comunicado::create([
            'descripcion' => $request->input('descripcion'),
        ]);

        return response()->json($comunicado, 201);
    }

    public function obtenerComunicados()
    {
        // Obtén todos los comunicados y devuélvelos como respuesta JSON
        $comunicados = Comunicado::all();
        return response()->json($comunicados);
    }

    public function eliminarComunicado($id)
    {
        // Busca y elimina un comunicado por ID
        $comunicado = Comunicado::find($id);

        if (!$comunicado) {
            return response()->json(['message' => 'Comunicado no encontrado'], 404);
        }

        $comunicado->delete();

        return response()->json(['message' => 'Comunicado eliminado']);
    }
}
