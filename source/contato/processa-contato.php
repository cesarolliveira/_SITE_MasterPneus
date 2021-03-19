<?php

require_once __DIR__ . '../../_app/class/appTools.php';
require_once __DIR__ . '../../_app/class/mailerPHP.php';
require_once __DIR__ . '/class/gContato.php';

$appTools = new appTools();
$mailerPHP = new mailerPHP();
$gPreCadastro = new gContato();

try {
    $nome = $_POST['nome'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];

    // AJUSTA DADOS
    $nome = $appTools->addAspas($nome);
    $celular = $appTools->somenteNumeros($celular);
    $email = $appTools->addAspas($email);
    $dataRegistroEUA = $appTools->addAspas($appTools->dataAgoraEUA());
    $dataRegistroBR = $appTools->addAspas($appTools->dataAgoraBR());

    // REGISTRA O CONTATO NO DB
    $gPreCadastro->registraContato($nome, $celular, $email, $dataRegistroEUA);

    // ENVIA E-MAIL PARA CLIENTE FINAL
    $mailerPHP->enviaEmailCliente($nome, $email);

    // ENVIA E-MAIL INTERNO
    $mailerPHP->enviaEmailInterno($nome, $celular, $email, $dataRegistroBR);

    $retorno = array('erro' => 0);
    die(json_encode($retorno));
} catch (Exception $ex) {
    $retorno = array('erro' => 1, 'mensagem' => $ex->getMessage());
    die(json_encode($retorno));
}