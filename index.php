<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Transacao;

//Filtro de Busca
$busca = filter_input(INPUT_GET, 'busca', FILTER_SANITIZE_STRING);

//Filtro de Status
$filtroStatus = filter_input(INPUT_GET, 'status', FILTER_SANITIZE_STRING);
$filtroStatus = in_array($filtroStatus,['BOLETO','DOC','TED']) ? $filtroStatus : '';


//Condições SQL
$condicoes = [
    strlen($busca) ? 'tipo LIKE "%' .str_replace(' ','%',$busca).'%"' : null,
    strlen($filtroStatus) ? 'categoria = "'.$filtroStatus.'"' : null
];

//Remove Posições Vazias
$condicoes = array_filter($condicoes);



// Clausulas WHERE
$where = implode(' AND ',$condicoes);

$transacao = Transacao::getTransacao($where);

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/listagem.php';
include __DIR__.'/includes/footer.php';

?>