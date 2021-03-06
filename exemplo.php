<?php 

# Script de exemplo para funcionamento do webservice do site app.meucep.online
/*************************/
# Autor: Eduardo Palandrani
# Data e Hora: 2018-08-28 23:05:27
/*************************/

function BuscaCEP($key, $cep){ # Função simplificada do exemplo para busca de CEP no meucep.online
	$retorno = file_get_contents('http://app.meucep.online?KEY=$key&TIPO=CEP&CEP=$cep');
	
	echo $retorno; # Apague essa linha para não mostrar mais na tela os dados em JSON

	# Basta comentar a linha de baixo para tratar os dados que vem em JSON
	//$cep = json_decode($retorno); 
}

function EnviaSMS($key, $cel, $msg){ # Função simplificada do exemplo para envio de SMS no meucep.online
	$retorno = file_get_contents('http://app.meucep.online?KEY=$key&TIPO=SMS&CEL=$cel&MSG=$msg');
	
	echo $retorno; # Apague essa linha para não mostrar mais na tela os dados em JSON

	# Basta comentar a linha de baixo para tratar os dados que vem em JSON
	//$sms = json_decode($retorno); 
}
