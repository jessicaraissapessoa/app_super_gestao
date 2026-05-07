<h3>fornecedor</h3>

{{-- comentário com sintaxe blade --}}

@php
    // Comentário com sintaxe php

    //if() {} else if {} else {}
@endphp

{{-- @dd($fornecedores) --}}

@if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem muitos fornecedores cadastrados</h3>
@else
    <h3>Não existem fornecedores cadastrados</h3>
@endif

Fornecedor: {{ $fornecedores[0]['nome'] }}
<br>
Status: {{  $fornecedores[0]['status'] }}
<br>
@if(!($fornecedores[0]['status'] == 'S'))
    Fornecedor inativo
@endif

<!-- Executa se a codição for falsa -->
@unless($fornecedores[0]['status'] == 'S')
    Fornecedor inativo
@endunless