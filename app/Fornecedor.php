<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fornecedor extends Model
{
    //Implementando soft delete;
    use SoftDeletes;

    //Corrigindo o nome da tabela no Model para o correto ORM do Eloquent
    protected $table = 'fornecedores';

    //Habilitando o preenchimento através do método create de determinados atributos do objeto - Quais valores podem receber atribuição
    protected $fillable = ['nome','site','uf','email'];
}
