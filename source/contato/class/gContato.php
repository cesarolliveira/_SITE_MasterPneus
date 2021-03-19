<?php

require_once __DIR__ . './../../_app/class/PDOHandler.php';

class gContato
{
    public function registraContato($nome, $celular, $email, $dataRegistroEUA)
    {
        $PDOHandler = new PDOHandler();

        try {
            $PDOHandler->query("INSERT INTO tb_contato (tb_contato.nome, tb_contato.celular, tb_contato.email, tb_contato.data_registro) VALUES ($nome, $celular, $email, $dataRegistroEUA)");
            $PDOHandler->execute();

            return true;
        } catch (Exception $ex) {
            throw new Exception($ex->getMessage());
        }
    }
}
