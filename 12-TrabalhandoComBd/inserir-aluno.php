<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;

require_once 'vendor/autoload.php';

$pdo = ConnectionCreator::createConnection();

$student = new Student(
    null, 
    "Alline Risso", 
    new \DateTimeImmutable('1981-05-20')
);

$name = $student->name();

$sqlInsert = "INSERT INTO students (name, birth_date) VALUES (:name, :birth_date);";
$statement = $pdo->prepare($sqlInsert);
$statement->bindParam(':name', $student->name());
$statement->bindValue(':birth_date', $student->birthDate()->format('Y-m-d'));

$name = 'Novo Nome';

if ($statement->execute()) {
    echo "Aluno incluído" . PHP_EOL;
}


//var_dump ($pdo->exec($sqlInsert)) . PHP_EOL;
