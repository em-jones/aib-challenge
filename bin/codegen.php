<?php
use Nette\PhpGenerator\Helpers;

if(!isset($argv[1])) {
  echo 'cannot configure without arguments...\n';
}  else {
  DEFINE('BASE_NAMESPACE', 'Agravic\AIB');
  include_once __DIR__ . '/../vendor/autoload.php';
  $nameSpace = new Nette\PhpGenerator\PhpNamespace(BASE_NAMESPACE);
  $class = $nameSpace->addClass($argv[1]);
  $value = new \Nette\PhpGenerator\Property('value');
  $validator = new \Nette\PhpGenerator\Property('validator');
  $getValue = new \Nette\PhpGenerator\Method('getValue');
  $getValue->setReturnType('string');
  $getValid = new \Nette\PhpGenerator\Method('getValid');
  $getValid->addParameter('validatorType', null);
  $getValid->setReturnType('bool');
  $class
    ->setImplements(['Validatable'])
    ->setProperties(compact('value', 'validator'))
    ->setMethods(compact('getValue', 'getValid'))
  ;
// to generate PHP code simply cast to string or use echo:
  echo Helpers::tabsToSpaces("<?php \n\n" . $nameSpace, 2);
}
