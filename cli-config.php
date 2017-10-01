<?php

require_once './vendor/autoload.php';

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$entity_path = ["./Entity/"];
$devMode = true;

$db_config = [
  "driver" => "pdo_pgsql",
  "host" => "localhost",
  "user" => "doctest",
  "password" => "doctest",
  "dbname" => "doctest"
];

$entity_config = Setup::CreateAnnotationMetadataConfiguration($entity_path, $devMode);
$em = EntityManager::create($db_config, $entity_config);

$helperSet = new \Symfony\Component\Console\Helper\HelperSet([
  "db" => new \Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper($em->getConnection()),
  "em" => new \Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper($em)
]);
