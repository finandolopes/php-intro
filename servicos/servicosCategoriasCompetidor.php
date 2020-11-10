<?php
/**Created by Visual Studio Code in PHPStorm
 * User Allyson
 * Date 09/06/2020
 */
//Config de categorias
//Funções
function defineCategoriaCompetidor(string $nome, string $idade) : ?string
{
//Variaveis em PHP
    $categorias = [];
    $categorias[] = 'infantil';
    $categorias[] = 'adolescente';
    $categorias[] = 'adulto';
    $categorias[] = 'idosos';
//Validação de dados
    if (validarNome($nome) && validaIdade($idade)) {
        //Se tudo ocorrer BEM será removido a mensagem de ERRO
        obterMensagemErro();
//Separação por paramentros das idades com if else.
        if ($idade >= 6 && $idade <= 12) {
            //echo 'infantil';
            for ($I = 0; $I <= count($categorias); $I++) {
                if ($categorias[$I] == 'infantil')
                    setarMensagemSucess("O nadador " . $nome . " compete na categoria " . $categorias[$I]);
                return null;
            }
        } else if ($idade >= 13 && $idade <= 18) {
            //echo 'adolescente';
            for ($I = 0; $I <= count($categorias); $I++) {
                if ($categorias[$I] == 'adolescente')
                    setarMensagemSucess("O nadador " . $nome . " compete na categoria " . $categorias[$I]);
                return null;
            }
        } else if ($idade >= 19 && $idade <= 40) {
            //echo 'adulto';
            for ($I = 0; $I <= count($categorias); $I++) {
                if ($categorias[$I] == 'adulto')
                    setarMensagemSucess("O nadador " . $nome . " compete na categoria " . $categorias[$I]);
                return null;
            }
        } else {
            for ($I = 0; $I <= count($categorias); $I++) {
                //echo 'idosos';
                if ($categorias[$I] == 'idosos')
                    setarMensagemSucess("O nadador " . $nome . " compete na categoria " . $categorias[$I]);
                return null;
            }
        }
    }
    else {
        //Se tudo ocorrer MAL será removido a mensagem de SUCESSO
        removerMensagemSucess();
        return obterMensagemErro();
    }
}
?>
