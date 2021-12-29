# Banco2Data

Simples conversor de datas entre os formatos dd/mm/yyyy e yyyy-mm-dd

## Instalação

Para instalar:
```shell
composer require dxuartz/data2banco
```

## Utilização

Para usar esta classe basta seguir o exemplo abaixo:
```php
<?php
require __DIR__ . '/vendor/autoload.php';
echo ( new \Dxuartz\Banco2Data( '2021-12-01' ) )->toData();
echo ( new \Dxuartz\Banco2Data( '12/10/2000' ) )->toBanco();
```

## Requisitos

- Necessário PHP 7.4 ou superior