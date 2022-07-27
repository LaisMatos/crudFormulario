
<?php
   /* 
    #________conexão com a router_______#
    
        require_once('router.php');
        session_status();

    */
?>


<!DOCTYPE>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title> Cadastro </title>
        <link rel="stylesheet" type="text/css" href="assets/style.css">
    </head>

    <body>       
        <header>
            <div id="containerHeader">
                <div id="img-logo">
                    <a href=""><img src="assets/img/logo_alphacode.png" alt="Home Alphacode"></a> 
                </div>
                <div id="titulo">
                    <h1> Cadastro de Contatos </h1>
                </div>
            </div>
        </header>
        <div id="container">
            <div id="cadastro"> 
                <form  action= "router.php" name="frmCadastro" method="POST" >                    
                    
                    <!--Nome-->
                    <div class="campos">
                        <div class="cadastroInformacoesPessoais">
                            <label> Nome completo </label>
                        </div>
                        <div class="cadastroEntradaDeDados">
                            <input class="input" type="text" name="nome" value="" placeholder="Ex.: Letícia Pacheco dos Santos" maxlength="100" required>
                        </div>
                    </div>

                    <!--Dt Nascimento-->
                    <div class="campos">
                        <div class="cadastroInformacoesPessoais">
                            <label> Data de nascimento </label>
                        </div>
                        <div class="cadastroEntradaDeDados">
                            <input class="input" type="text" name="dtnascimento" value="" placeholder="Ex.: 03/10/2003" required>
                        </div>
                    </div>
                    
                    <!--E-mail-->
                    <div class="campos">
                        <div class="cadastroInformacoesPessoais">
                            <label> E-mail </label>
                        </div>
                        <div class="cadastroEntradaDeDados">
                            <input class="input" type="email" name="email" value="" placeholder="Ex.: leticia@gmail.com/" required>
                        </div>
                    </div>

                    <!--Profissão-->
                    <div class="campos">
                        <div class="cadastroInformacoesPessoais">
                            <label> Profissão </label>
                        </div>
                        <div class="cadastroEntradaDeDados">
                            <input class="input" type="text" name="profissao" value="" placeholder="Ex.:Desenvolvedora Web" maxlength="100" required>
                        </div>
                    </div>
                        
                    <!--Telefone-->
                    <div class="campos">
                        <div class="cadastroInformacoesPessoais">
                            <label> Telefone para contato </label>
                        </div>
                        <div class="cadastroEntradaDeDados">
                            <input class="input" type="tel" name="celular" value="" placeholder="Ex.: (11) 4033-2019">
                        </div>
                    </div>

                    <!--Celular-->
                    <div class="campos">
                        <div class="cadastroInformacoesPessoais">
                            <label> Celular para contato </label>
                        </div>
                        <div class="cadastroEntradaDeDados">
                            <input class="input" type="tel" name="celular" value="" placeholder="Ex.: (11) 98493-2039">
                        </div>
                    </div>
                    
                    <!--Notificações-->
                    <div class="containerCheckbox">                    
                        <div class="camposCheckbox">
                            <div class="cadastroEntradaDeDados">
                                <input type="checkbox" name="notificacao[]" value="whatsapp">                            
                                <label> Número de celular possui Whatsapp</label>                            
                            </div>
                        </div>
                        
                        <div class="camposCheckbox">
                            <div class="cadastroEntradaDeDados">
                                <input type="checkbox" name="notificacao[]" value="email"> 
                                <label> Enviar notificações por E-mail</label>
                            </div>
                        </div>

                        <div class="camposCheckbox">
                            <div class="cadastroEntradaDeDados">
                                <input type="checkbox" name="notificacao[]" value="sms"> 
                                <label> Enviar notificações por SMS</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="enviar">
                        <input type="submit" name="btnEnviar" value="Cadastrar contato">
                    </div>
                    
                </form>           
            </div>
        </div>    

       
        <!--Consulta de dados-->
        <div id="consultaDeDados">
            <table id="tblConsulta" >
               
                <tr id="tblLinhas">
                    <td class="tblColunas destaque"> Nome </td>
                    <td class="tblColunas destaque"> Data de nascimento </td>
                    <td class="tblColunas destaque"> E-mail </td>
                    <td class="tblColunas destaque"> Celular para contato </td>
                    <td class="tblColunas destaque">Ações</td>
                </tr>               
               
                
                <tr id="tblLinhas">

                    <td class="tblColunas registros">Nome</td>
                    <td class="tblColunas registros">Data de nascimento</td>
                    <td class="tblColunas registros">Email</td>
                    <td class="tblColunas registros">Celular para contato</td>
                      
                                          
                    <!--Ações-->
                    <td class="tblColunas registros">
                        <!--editar-->
                        <a href="#"><img src="assets/img/editar.png" alt="Editar" title="Editar" class="editar"></a>
                        <!--excluir-->
                        <a onclick="" href="#"><img src="assets/img/excluir.png" alt="Excluir" title="Excluir" class="excluir"></a>             
                    </td>
                </tr>

            </table>        
        </div>

        <!--Footer -->
        <footer>

            <a href="#">Termos|Politicas</a>
            <div class="labelRodape">
                <label  class=""> ©Copyright 2022 | Desenvolvido por </label>
                <img src="assets/img/logo_rodape_140x35.png" alt="Logo-rodape">
            </div>
            <label>©Alphacode IT Solutions 2022</label>
           
            
        </footer>
    </body>
</html>