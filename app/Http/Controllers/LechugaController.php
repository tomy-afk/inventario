<?php

namespace App\Http\Controllers;

use App\Models\Lechuga;
use Illuminate\Http\Request;
use App\Http\Requests\LechugaRequest;
use Illuminate\Support\Facades\Auth;
use PDF;

use App\Http\Controllers\Controller;

class LechugaController extends Controller
{


    public function generatePDF(Request $request)
    {
        $id = $request->route('id'); // Obtén el ID de la ruta

        // Busca el registro de lechuga por su ID
        $lechuga = Lechuga::find($id);

        if (!$lechuga) {
            return "Registro de lechuga no encontrado.";
        }

        // Genera el PDF con los datos del registro de lechuga
        $pdf = PDF::loadView('lechuga.pdf', compact('lechuga'));

        // Abre el PDF en una nueva ventana del navegador
        return $pdf->stream('lechuga.pdf');
    }


    
/**
     * Store a newly created resource in storage.
     */
    public function store(LechugaRequest $request)
    {
        // Validar y guardar los datos del formulario
        $request->validate([
            'TIPOL' => 'required',
            'CANTL' => 'required',
            'FECHA' => 'required',
            'NOMBREC' => 'required',
        ]);

        // Crear una nueva instancia del modelo Lechuga con los datos del formulario
        $lechuga = new Lechuga();
        $lechuga->TIPOL = $request->input('TIPOL');
        $lechuga->CANTL = $request->input('CANTL');
        $lechuga->FECHA = $request->input('FECHA');
        $lechuga->NOMBREC = $request->input('NOMBREC');

        // Asignar el ID del usuario actual al campo CREATED_ID
        $lechuga->CREATED_ID = Auth::id(); // Asigna el ID del usuario actual

        // Guardar la instancia en la base de datos
        $lechuga->save();


        // Redirigir a la vista 'home'
        return redirect()->route('home');
    }
    
    public function dataTable()
    {
        // Obtén los datos de las lechugas registradas (puedes usar el modelo Lechuga)
        $lechugas = Lechuga::all(); // Ejemplo, obtener todas las lechugas

        return view('admin.lechuga-table', compact('lechugas'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    

    /**
     * Display the specified resource.
     */
    public function show(Lechuga $lechuga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lechuga $lechuga)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lechuga $lechuga)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lechuga $lechuga)
    {
        //
    }

    

}
