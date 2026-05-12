<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index() {
        $fornecedores = [
            0 => [
                'nome' => 'fornecedor1', 
                'status' => 'N', 
                'cnpj' => '00.000.000/000-00',
                'ddd' => '11', //São Paulo - SP
                'telefone' => '0000-0000'
            ],
            1 => [
                'nome' => 'fornecedor2', 
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '85', //Fortaleza - CE
                'telefone' => '0000-0000'
            ],
            2 => [
                'nome' => 'fornecedor3', 
                'status' => 'N', 
                'cnpj' => '',
                'ddd' => '32', //Juiz de Fora - MG
                'telefone' => '0000-0000'
            ],
        ];

        //Operador condicional ternário-> condição ? se verdade : se falso
        //Por encadear: condição ? se verdade : (condição ? se verdade : se falso)
        // $msg = isset($fornecedores[2]['cnpj']) ? 'CNPJ informado' : 'CNPJ não informado';
        // echo($msg);

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}