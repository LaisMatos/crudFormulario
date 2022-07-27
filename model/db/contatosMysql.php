<?php
/********************************************************************************************************************
*Objetivo: Arquivo responsável pela manipulação de dados do banco de dados(insert, update, select e delete).
*Autor: Lais Matos de Carvalho
*Data: 21/07/22
*Versão: 1.0
*********************************************************************************************************************/


//import do arquivo que estabelece a conexão com o banco de dados
require_once('conexaoMysql.php');


//function para enserir no banco de dados
function insertContato(){ //quem traz os dados do array selecionando pelo post é $dadosContato

}

// function para atualizar no banco de dados
function updateContato(){

}

//function para excluir no banco de dado
function deleteContato(){

}

//functio para listar todos os contatos dos bancos de dados
function selectAllContato(){

}

//function para buscar um contato no banco de dados através do id do registro
function selectByIdContato(){  

}

/*__________ ANOTAÇÕES ___________
1. criação de funções
3. passar argumentos
4. import das funções ao banco de dados usando <require_once>
sintaxe: '".$nomeDaVariavel['ChaveDoArray']."' 
            aspas simples -> aspas duplas -> ponto -> $variavel -> 
            colchete -> aspas simples -> ChaveDoArray -> aspas simples -> colchetes ->
            ponto -> aspas duplas -> aspas simples     
               
Exemplo:
//script para enviar vai banco de dados
$sql="
        insert into tblContatos
                            (nome, 
                             telefone, 
                             celular, 
                             email, 
                             obs);
        values
            ('".$dadosContato['nome']."', 
             '".$dadosContato['telefone']."', 
             '".$dadosContato['celular']."', 
             '".$dadosContato['email']."',
             '".$dadosContato['obs']."');
            
     ";
Ao mandar um script para o banco do tipo Delet, Update e ---- o banco não retorna os dados modificados. Só retorna se deu erro!
Só o Select que retorna dados.
<$rsDados> --> array que amarzenará os dados convertidos do banco de dados
 
estrutura <while> para gerenciar a quantidade de vezes que deverá ser feita a repetição de itens do array
while ($rsDados = mysqli_fetch_assoc($result)) {}
A estrutura do UPDATE é ddiferente da estrututa INSERT
    Exemplo:
            $sql="update tblContatos set
                    nome        ='".$dadosContato['nome']."', 
                    telefone    ='".$dadosContato['telefone']."',
                    celular     ='".$dadosContato['celular']."',
                    email       ='".$dadosContato['email']."',
                    obs         ='".$dadosContato['observacao']."'
                    where idcontato=".$dadosContato['id'];
 where idcontato=".$dadosContato['id']; --> limita o id que precisa ser atualizado
*/





?>