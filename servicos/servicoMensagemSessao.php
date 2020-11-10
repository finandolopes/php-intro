<?php
/**Created by Visual Studio Code in PHPStorm
 * User Allyson
 * Date 09/06/2020
*/
session_start();
//Funções
function setarMensagemSucess(string $mensagem) : void
{
    $_SESSION['MESSAGE-SUCESS'] = $mensagem;
}
function obterMensagemSucess(): ?string
{
    if(isset($_SESSION['MESSAGE-SUCESS']))
        return $_SESSION['MESSAGE-SUCESS'];
    return null;
}
function setarMensagemErro(string $mensagem) : void
{
    $_SESSION['MESSAGE-ERRO'] = $mensagem;
}
function obterMensagemErro(): ?string
{
    if(isset($_SESSION['MESSAGE-ERRO']))
        return $_SESSION['MESSAGE-ERRO'];
        return null;
}
function removerMensagemErro() : void
{
    if(isset($_SESSION['MESSAGE-ERRO']))
        unset( $_SESSION['MESSAGE-ERRO']);
}
function removerMensagemSucess() : void
{
    if (isset($_SESSION['MESSAGE-SUCESS']))
        unset($_SESSION['MESSAGE-SUCESS']);
}
?>