<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lechuga extends Model
{
    use HasFactory;

    const CREATED_AT        = 'CREATED_AT';
    const UPDATED_AT        = 'UPDATED_AT';
    const DELETED_AT        = 'DELETED_AT';
    const DELETED_ID        = 'DELETED_ID';

    protected $table = 'lechuga'; // Nombre de la tabla en la base de datos
    protected $primaryKey   = 'ID';

    protected $fillable = [
        'TIPOL',
        'CANTL',
        'FECHA',
        'NOMBREC',
        'CREATED_AT',
        'CREATED_ID',
        'UPDATED_AT',
        'UPDATED_ID',
        'DELETED_AT',
        'DELETED_ID'
    ];

    // Define cualquier relación que puedas necesitar, por ejemplo:
    // public function entregas() {
    //     return $this->hasMany(Entrega::class);
    // }
}
