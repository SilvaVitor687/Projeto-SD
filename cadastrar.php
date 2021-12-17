<?php

require __DIR__.'/vendor/autoload.php';

//Constante para mudar o Titulo da tela de cadastro...
define('TITLE','Cadastrar Transações');

use \App\Entity\Transacao;
$obTransacao = new Transacao;

if(isset($_POST['campNome'], $_POST['campTransacao'])) {
    
    $obTransacao->titulo        = $_POST['campNome'];
    $obTransacao->valor         = $_POST['campTransacao'];
    $obTransacao->categoria     = $_POST['campCategoria'];
    $obTransacao->tipo          = $_POST['ativo'];
    $obTransacao->cadastrar();

    header('location: index.php?status=success');
    exit;
    
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';

?>