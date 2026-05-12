<h3>fornecedor</h3>

{{-- comentário com sintaxe blade --}}

@php
    // Comentário com sintaxe php

    //if(isset($variável)) {} else if {} else {} //isset retorna true se a variável estiver definida
    /* if(empty($variavel)) // empty verifica se uma string está vazia:
    - ''
    - 0
    - 0.0
    - '0'
    - null
    - false
    - array()
    - $var  */
@endphp

{{-- @dd($fornecedores) --}}

{{-- @if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem muitos fornecedores cadastrados</h3>
@else
    <h3>Não existem fornecedores cadastrados</h3>
@endif --}}

@isset($fornecedores) {{-- Acessa o bloco de código apenas se a variável estiver definida --}}
    
    @for ($i = 0; isset($fornecedores[$i]); $i++)
        Fornecedor: {{ $fornecedores[$i]['nome'] }}
        <br>
        Status: {{  $fornecedores[$i]['status'] }}
        <br>
        CNPJ: {{ $fornecedores[$i]['cnpj'] ?? '' }} <!-- valor default só é aplicado para variável não definida ou null -->
        <br>
        Telefone: ({{ $fornecedores[$i]['ddd'] ?? ''}}) {{ $fornecedores[$i]['telefone'] ?? '' }}
        <hr>
    @endfor
    
    
    @switch($fornecedores[1]['ddd'])
        @case ('11')
            São Paulo - SP
            @break
        @case ('32')
            Juíz de Fora - MG
            @break
        @case ('85')
            Fortaleza - CE
            @break
        @default
            Estado não identificado
    @endswitch


    {{-- @isset($fornecedores[2]['cnpj'])
        CNPJ: {{ $fornecedores[2]['cnpj'] }}
        @empty($fornecedores[2]['cnpj'])
            Vazio
        @endempty
    @endisset --}}


@endisset


{{-- <br>
@if(!($fornecedores[0]['status'] == 'S'))
    Fornecedor inativo
@endif

<!-- Executa se a codição for falsa -->
@unless($fornecedores[0]['status'] == 'S')
    Fornecedor inativo
@endunless --}}