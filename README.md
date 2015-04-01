## Common Helpers

>> **Note:** This repository contains a set of functions that may help us, Brazilians, with common tasks, such date conversion and string masks. So, for now on, this documentation will be written in portuguese (pt_BR)

Esse repositório disponibiliza um conjunto de funções para algumas tarefas simples que passamos em todo novo projeto: conversão de datas, formatação de strings, etc...


## Instalação
Utilizaremos o [composer](http://getcomposer.org/) para a instalação desse pacote.

Basta adicionar a linha abaixo ao seu arquivo ```composer.json```:
```
"vsmoraes/helpers": "dev-master"
```

Ou executar:
```
composer require vsmoraes/helpers
```

## Funções disponívels

### str_mask($string, $mask)
Aplica uma máscara à uma string

```php
$telefone = str_mask('11999999999', '(##) #####-###'); // Resultado: (11) 99999-9999
```

### format_cpf($cpf)
Retorna a string formatada como CPF

```php
$cpf = format_cpf('99999999999'); // Resultado: 999.999.999-99
```

### format_cnpj($cnpj)
Retorna a string formatada como CNPJ

```php
$cnpj = format_cnpj('99999999999999'); // Resultado: 99.999.999/9999-99
```


## Testes
```php
php vendor/bin/phpunit
```
