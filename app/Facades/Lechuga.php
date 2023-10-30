<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class Lechuga extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'lechuga'; // Reemplaza 'lechuga' con el nombre del servicio o clase que deseas utilizar con la facade.
    }
}
