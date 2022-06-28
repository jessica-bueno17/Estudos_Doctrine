<?php 

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';


$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();


$alunoRepository = $entityManager->getRepository(Aluno::class);

$alunoList = $alunoRepository->findAll();

//busca todos
foreach ($alunoList as $aluno) {
  echo "ID: {$aluno->getId()}\nNome: {$aluno->getNome()}\n\n";
}

// busca um especifico pelo id
$flavio = $alunoRepository->find(4);
echo $flavio->getNome() .PHP_EOL;

//
$sergioLopes = $alunoRepository->findBy([
  'nome' => 'Sergio Lopes'
]);
var_dump($sergioLopes);

$sergioLopes = $alunoRepository->findOneBy([
  'nome' => 'Sergio Lopes'
]);
var_dump($sergioLopes);