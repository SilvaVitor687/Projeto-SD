<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE','Editar Transação');

use \App\Entity\Transacao;

//VALIDAÇÃO DO ID
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
  header('location: index.php?status=error');
  exit;
}

//CONSULTA A VAGA
$obTransacao = Transacao::getTransacoes($_GET['id']);

//VALIDAÇÃO DA VAGA
if(!$obTransacao instanceof Transacao){
  header('location: index.php?status=error');
  exit;
}

//VALIDAÇÃO DO POST
if(isset($_POST['campNome'],$_POST['campCategoria'])){

  $obTransacao->titulo    = $_POST['campNome'];
  $obTransacao->categoria = $_POST['campCategoria'];
  $obTransacao->atualizar();

  header('location: index.php?status=success');
  exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';