<?php

require __DIR__ . '/vendor/autoload.php';

use FirstProject\Person;

$person = new Person();

$person->name = "Teste";

$person->setCpf("392.421.990-79");

echo $person->getCpf();
echo '  ';
echo $person->getCpfWithMak();
echo '  ';
echo $person->name;

