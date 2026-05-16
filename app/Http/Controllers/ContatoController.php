<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato() {

        var_dump($_POST); //Para ver o que é enviado no form
        return view('site.contato', ['titulo' => 'Contato']);
    }
}
