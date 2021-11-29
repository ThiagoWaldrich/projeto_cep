<?php

require_once "vendor/autoload.php";

use \Wead\DigitalCep\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipcode('49037000');

print_r($resultado);