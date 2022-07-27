<?php

/*************************************************************
*Objetivo: Arquivo para criar conexão com banco MySql
*Autor: Lais Matos de Carvalho
*Data: 23.07.22
*Versão: 1.0
****************************************************************/


const SERVER = 'localhost'; 
const USER = 'root'; 
const PASSWORD ='';  
const DATABASE = 'dbalphacode';

 
function conexaoMysql(){
    
    //var conexão é quem guarda todos os dados do banco 
    $conexao = array();
    
    $conexao = mysqli_connect(SERVER, USER, PASSWORD, DATABASE);

    if ($conexao) {
        return $conexao;
    }else {
        return false;
    }
 
}

//fechamento de conexão
function fecharConexaoMysql($conexao){
    mysqli_close($conexao);
}


?>