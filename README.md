# meucep.online
Busca de CEP online e envio de SMS. Documentação oficial para integração da Plataforma.

# 1 .  
### Faça uma requisição pelo endereço "http://app.meucep.online"  

# 2 .  
### Passe a sua chave pelo parâmetro "KEY" e o tipo da requisição por "TIPO", bem com todos os demais dados necessários, por exemplo o CEP para caso de busca de CEP ou o(s) números de celular e a mensagem no caso de envio de SMS
(verificar o pacote de requisição adquirido)  

# 3 .  
### Trate os dados recebidos por Json.


Exemplo de requisição de busca de CEP:  

```php  
<?php
	$retorno = file_get_contents('http://app.meucep.online?KEY=SUACHAVE&TIPO=CEP&CEP=01001-000');
	$cep = json_decode($retorno); 
```  

Exemplo de retorno de Busca de CEP:  
```php  
	{
	 "cep": "01001-000", 
	 "logradouro": "Praça da Sé", 
	 "complemento": "lado ímpar",
	 "bairro": "Sé", 
	 "localidade": "São Paulo",
	 "uf": "SP",
	 "unidade": "", 
	 "ibge": "3550308", 
	 "gia": "1004"
	}
```  
Exemplo de requisição de envio de SMS:

```php  
<?php
	$retorno = file_get_contents('http://app.meucep.online?KEY=SUACHAVE&TIPO=SMS&CEL=(99) 99999-9999&MSG=TEXTO_DO_SMS');
	$cep = json_decode($retorno); 
```  

Obs: É muito importante passar os dados certos, caso contrário o retorno será com erro!

Exemplo de erro:
```php
	{ 
	 "erro": "Chave inválida ou não cadastrada!" 
	}
```
O parâmetro "erro" só é enviado quando algum erro é apresentado, caso contrário os dados referentes ao CEP ou do SMS enviado são exibidos pelo retorno.



 - Espero que gostem do conteúdo, qualquer dúvida podem me procurar!
 Att. Eduardo Palandrani
