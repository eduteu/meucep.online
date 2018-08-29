# meucep.online
Documentação oficial para integração da Plataforma.

# 1 .  
### Faça uma requisição pelo endereço "http://app.meucep.online"  

# 2 .  
### Passe a sua chave pelo parâmetro "KEY" e o cep por "CEP"
(verificar o pacote de requisição adquirido)  

# 3 .  
### Trate os dados recebidos por Json.


Exemplo de requisição:  

```php  
<?php
	file_get_contents('http://app.meucep.online?KEY=SUACHAVE&CEP=01001-000');
	json_decode($retorno); 
```  

Exemplo de retorno:  
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

Obs: É muito importante passar os dados certos, caso contrário o retorno será com erro!
