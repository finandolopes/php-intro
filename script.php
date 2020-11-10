<?php
/**Created by Visual Studio Code in PHPStorm
 * User Allyson
 * Date 09/06/2020
*/
//abertura php
//Inclusão dos diretórios
include "servicos/servicoMensagemSessao.php";
include "servicos/servicoValidacao.php";
include "servicos/servicosCategoriasCompetidor.php";
//Inserção de um voluntário
$nome =  $_POST['nome'];
$idade = $_POST['idade'];
//Chamando
defineCategoriaCompetidor($nome,$idade);
header('location:index.php');
//fechamento php
?>