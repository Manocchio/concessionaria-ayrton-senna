<?php
    spl_autoload_register("carregarPagina");
    
     function carregarPagina($nomeClasse){
        if(file_exists(__DIR__.DIRECTORY_SEPARATOR."model".DIRECTORY_SEPARATOR.$nomeClasse.".php")){
            require_once(__DIR__.DIRECTORY_SEPARATOR."model".DIRECTORY_SEPARATOR.$nomeClasse.".php");

        }
        else if (file_exists(__DIR__.DIRECTORY_SEPARATOR."controller".DIRECTORY_SEPARATOR.$nomeClasse.".php")){

            require_once(__DIR__.DIRECTORY_SEPARATOR."controller".DIRECTORY_SEPARATOR.$nomeClasse.".php");
        }
        else if (file_exists(__DIR__.DIRECTORY_SEPARATOR."dao".DIRECTORY_SEPARATOR.$nomeClasse.".php")){
            
            require_once(__DIR__.DIRECTORY_SEPARATOR."dao".DIRECTORY_SEPARATOR.$nomeClasse.".php");
        }
    }
?>