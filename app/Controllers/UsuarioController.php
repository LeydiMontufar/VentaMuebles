<?php

namespace App\Controllers;

class UsuarioController extends BaseController
{
    public function index()
    {
        return view('Usuario/CrearUsuario');
    }
}
