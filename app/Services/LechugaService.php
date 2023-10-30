<?php

namespace App\Services;

use App\Models\Lechuga;

class LechugaService
{
    public function createLechuga(array $data)
    {
        // Lógica para crear una nueva lechuga en la base de datos
        return Lechuga::create($data);
    }

    public function updateLechuga(Lechuga $lechuga, array $data)
    {
        // Lógica para actualizar una lechuga existente en la base de datos
        $lechuga->update($data);
        return $lechuga;
    }

    public function deleteLechuga(Lechuga $lechuga)
    {
        // Lógica para eliminar una lechuga de la base de datos
        $lechuga->delete();
    }

    public function getLechugaById($id)
    {
        // Lógica para obtener una lechuga por su ID
        return Lechuga::find($id);
    }

    // Puedes agregar más métodos según tus necesidades

    // Por ejemplo, podrías tener métodos para listar todas las lechugas, realizar búsquedas, etc.
}
