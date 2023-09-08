<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva3;
use Carbon\Carbon;


class Reserva3Controller extends Controller
{
    public function store3(Request $request)
    {
        // Validación y otros datos de reserva...
    
        // Convertir la hora recibida a la zona horaria deseada (ejemplo: 'America/La_Paz')
        $fechaHora = Carbon::parse($request->input('fecha_hora'))->timezone('America/La_Paz');
    
        // Verificar si ya existe una reserva en la misma hora y fecha en la base de datos
        $existingReserva = Reserva3::where('fecha_hora', $fechaHora)->first();
    
        if ($existingReserva) {
            // Retorna una respuesta JSON indicando que ya existe una reserva
            return response()->json(['message' => 'Ya existe una reserva en la misma hora.'], 400);
        }
    
        // Si no existe una reserva previa, crea la nueva reserva
        $reserva = Reserva3::create([
            'nombre' => $request->input('nombre'),
            'fecha_hora' => $fechaHora,
        ]);
    
        return response()->json($reserva, 201);
    }
    


    public function verificarDisponibilidad3(Request $request)
{
    $fechaHora = $request->query('fecha_hora');

    // Verifica si ya existe una reserva en la misma fecha y hora
    $existingReserva = Reserva3::where('fecha_hora', $fechaHora)->first();

    if ($existingReserva) {
        return response()->json(['disponible' => false, 'message' => 'Ya existe una reserva con la misma fecha y hora.'], 400);
    }

    return response()->json(['disponible' => true]);
}


    public function reservasDelDia3()
    {
        $reservas = Reserva3::whereDate('fecha_hora', Carbon::today())->get();

        return response()->json($reservas);
    }
}
