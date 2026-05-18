<?php

use Illuminate\Database\Seeder;
use App\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Instanciando o objeto
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Fornecedor 100';
        $fornecedor->site = 'www.fornecedor100.com.br';
        $fornecedor->uf = 'PB';
        $fornecedor->email = 'fornecedor100@gmail.com';
        $fornecedor->save();

        //O método create (atenção para o atributo fillable da classe)
        Fornecedor::create([
            'nome' => 'Fornecedor 200',
            'site' => 'www.fornecedor200.com.br',
            'uf'=> 'CE',
            'email'=> 'fornecedor200@gmail.com',
        ]);

        //Insert - Não popula created_at e updated_at porque essa query não passa pelo tratamento do Eloquent
        DB::table('fornecedores')->insert([
            'nome' => 'Fornecedor 300',
            'site' => 'www.fornecedor300.com.br',
            'uf'=> 'TO',
            'email'=> 'fornecedor300@gmail.com',
        ]);

        //Para rodar: php artisan db:seed   ----> Vai rodar o que estiver configurado em DatabaseSeeder.php
    }
}
