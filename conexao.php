<?php

    #define("CHAVE", "VALOR"); - define uma constante 
    define("__SERVER__", "localhost"); #onde o php irá conectar ao mysql
    define("__USER__", "root"); 
    define("__PASS__", "");
    define("__DB__", "lojaquadros");
    define("__PORT__", 3306);
    
    /**
     * mysqli_connect() -> connecta a base de dados com os valores de acesso a base informado
     */

    function getConnection() {
        $link = mysqli_connect(__SERVER__, __USER__, __PASS__, __DB__, __PORT__);
        mysqli_set_charset($link, "utf8");
        return $link;
    }