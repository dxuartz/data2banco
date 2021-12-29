<?php
require __DIR__ . '/vendor/autoload.php';
echo ( new \Dxuartz\Banco2Data( '2021-12-01' ) )->convert();