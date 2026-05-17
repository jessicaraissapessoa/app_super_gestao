<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    //Corrigindo o nome da tabela no Model para o correto ORM do Eloquent
    protected $table = 'fornecedores';

    //Habilitando o preenchimento através do método create de determinados atributos do objeto:
    protected $fillable = ['nome','site','uf','email'];
}
