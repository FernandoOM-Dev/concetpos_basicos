<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EjemploController extends Controller
{
    public function saludo($nombre = 'a todos')
    {
        return 'Hola '.$nombre;
    }

    public function tablas($numero)
    {
        $cadena = '';
        for($i=1; $i<=10; $i++)
        {
            $tmpcadena = $numero.'X'.$i.'='.$i*$numero;
            $cadena = $cadena.$tmpcadena;
        }
        return $cadena;
    }
}
