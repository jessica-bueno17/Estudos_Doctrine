<?php

namespace Alura\Doctrine\Helper;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;


class EntityManagerFactory
{
  public function getEntityManager()
  {
    // configurações do doctrine
    $rootDir = __DIR__ . '/../..';
    $config = Setup::createAnnotationMetadataConfiguration(
        [$rootDir . '/src'],
        true // modo de desenvolvimento
    );

    // configurações de conexao
    $connection = [
        'driver' => 'pdo_mysql',
        'host' => '127.0.0.1',
        'dbname' => 'curso_doctrine',
        'user' => 'root',
        'password' => 'root'
    ];
    return EntityManager::create($connection, $config);
  }

}

