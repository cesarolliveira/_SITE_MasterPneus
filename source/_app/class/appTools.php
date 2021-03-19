<?php

class appTools
{

    function somenteNumeros($str)
    {
        return preg_replace("/[^0-9]/", "", $str);
    }

    function gerarSenha($tamanho, $maiusculas, $minusculas, $numeros, $simbolos)
    {
        $ma = "ABCDEFGHIJKLMNOPQRSTUVYXWZ"; // $ma contem as letras maiúsculas
        $mi = "abcdefghijklmnopqrstuvyxwz"; // $mi contem as letras minusculas
        $nu = "0123456789"; // $nu contem os números
        $si = "!@#$%¨&*()_+="; // $si contem os símbolos
        $senha = '';

        if ($maiusculas) {
            // se $maiusculas for "true", a variável $ma é embaralhada e adicionada para a variável $senha
            $senha .= str_shuffle($ma);
        }

        if ($minusculas) {
            // se $minusculas for "true", a variável $mi é embaralhada e adicionada para a variável $senha
            $senha .= str_shuffle($mi);
        }

        if ($numeros) {
            // se $numeros for "true", a variável $nu é embaralhada e adicionada para a variável $senha
            $senha .= str_shuffle($nu);
        }

        if ($simbolos) {
            // se $simbolos for "true", a variável $si é embaralhada e adicionada para a variável $senha
            $senha .= str_shuffle($si);
        }

        // retorna a senha embaralhada com "str_shuffle" com o tamanho definido pela variável $tamanho
        return substr(str_shuffle($senha), 0, $tamanho);
    }

    function ajustaCPF($value)
    {
        // ADICIONA 0 A ESQUERDA EM CPF
        $value = str_pad(preg_replace('[^0-9]', '', $value), 11, '0', STR_PAD_LEFT);

        return ($value);
    }

    function addMask($mask, $value)
    {
        $value = str_replace(" ", " ", $value);

        for ($i = 0; $i < strlen($value); $i++) {
            $mask[strpos($mask, "#")] = $value[$i];
        }
        return $mask;
    }

    public function ajustaDataBR($data)
    {
        $resultado = date("d/m/Y", strtotime($data));
        date('d/m/Y', strtotime($data));

        return ($resultado);
    }

    public function ajustaDataDB($data)
    {
        $resultado = date("Y-m-d", strtotime($data));

        return ($resultado);
    }

    public function addAspas($data)
    {
        $resultado = "'" . $data . "'";

        return ($resultado);
    }

    public function dataAgoraEUA()
    {
        $resultado = date('Y-m-d H:i:s');

        return ($resultado);
    }

    public function dataAgoraBR()
    {
        $resultado = date('d/m/Y H:i:s');

        return ($resultado);
    }

    public function removeAspas($data)
    {
        $resultado = str_replace("'", "", $data);

        return ($resultado);
    }
}
