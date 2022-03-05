<?php

require_once "vendor/autoload.php";

use Iagobooknote\DigitalCep\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipcode('06065130');
$resultado2 = $busca->getAddressFromZipcode('01001000');

print_r($resultado);
print_r($resultado2);