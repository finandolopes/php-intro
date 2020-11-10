<?php
/**Created by Visual Studio Code in PHPStorm
 * User Allyson
 * Date 09/06/2020
*/
//Reformulação de formulário
function validarNome(string $nome) : bool
{
    if(empty($nome))
    {
        setarMensagemErro('O nome não pode ser vazio, preencha novamente.');
        return false;
    }
    else if(strlen($nome) < 3)
    {
        setarMensagemErro( 'Seu nome têm que ter mais que 3 caracteres ! Preencha novamente seu nome.');
        return false;   
    }
    else if(strlen($nome) > 30)
    {
        setarMensagemErro('Você ultrapassou 40 caracteres ! Preencha novamente seu nome .');
        return false;
    }
    return true;
}
function validaIdade(string $idade) : bool
{
    if (!is_numeric($idade)) {
        setarMensagemErro('Informe novamente sua idade.');
        return false;
    }
    return true;
}
?>