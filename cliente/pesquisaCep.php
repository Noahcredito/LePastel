<?php

$cep=filter_input(INPUT_POST, 'cep');

$url="http://viacep.com.br/ws/".$cep."/json/";

$resultado= json_decode(file_get_contents($url));
$dadosRetorno=$resultado->localidade.",".$resultado->logradouro.",
".$resultado->bairro.",".$resultado->complemento;

echo $dadosRetorno;

?>