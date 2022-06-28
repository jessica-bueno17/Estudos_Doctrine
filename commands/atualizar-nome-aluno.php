<?php 

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';


$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

// usando repositorio pra buscar um aluno, mas não é necessario
$alunoRepository = $entityManager->getRepository(Aluno::class);

$id = $argv[1];
$novoNome = $argv[2];
$aluno = $alunoRepository->find($id);
$aluno->setNome($novoNome);

$entityManager->flush(); // atualiza o db