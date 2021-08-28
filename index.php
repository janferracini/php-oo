<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema de Gestão Acadêmica</title>
</head>

<body>
  <?php
  require './Pessoa.php';
  require './Estudante.php';
  require './Professor.php';
  $conexao = new Connection();
  // $estudante = new Estudante(1);
  // echo $estudante->disciplinasMatriculadas();
  // 
  // $ira = $estudante->atualizaIRA(9);
  // echo "Novo IRA: {$ira} <br>";

  // $ira = $estudante->atualizaIRA(5);
  // echo "Novo IRA: {$ira}";
  // 
  ?>

  <h2>Estudante</h2>
  <?php
  // $estudante->nome = 'Maria';
  // $estudante->matricula = '2021065021';
  // $dadosEstudante = $estudante->verEstudante();
  // foreach ($dadosEstudante as $key => $value) {
  //   echo "{$key}: {$value} <br>";
  //}
  // $estudante = new Estudante('paulo@paulo.com.br');
  // $estudanteDados = $estudante->verEstudante();
  // echo "Nome: {$estudanteDados->nome} <br>";
  // echo "Telefone: {$estudanteDados->telefone} <br>";
  // echo "E-mail: {$estudanteDados->email} <br>";
  // echo "Matrícula: {$estudanteDados->matricula} <br>";
  // echo "Idade: {$estudante->calculaIdade($estudanteDados->data_nascimento)} <br>";
  // echo "IRA: {$estudanteDados->ira} <br>";
  // echo "Avaliação: {$estudante->calculaAvaliacao()}";

  $estudantes = $conexao->listarEstudantes();
  foreach ($estudantes as $key => $value) {
    echo $value['nome'] . " - <a href='editarEstudante.php?email={$value['email']}'>Editar</a><br>";
  }

  ?>
  <br>
  <a href="cadastroEstudante.php"><button type="button">Novo Estudante</button></a>

  <br>
  <hr>
  <h2>Professor</h2>
  <?php
  //teste de conexao
  // $conn = new Connection();
  // $status = $conn->connect();
  // var_dump($status)

  //chamada da pessoa antes de ser uma classe abstrata
  // $pessoa = new Pessoa(5);
  // $pessoaDados = $pessoa->verDados();
  // echo "Nome: {$pessoaDados->nome} <br>";
  // echo "Telefone: {$pessoaDados->telefone} <br>";
  // echo "E-mail: {$pessoaDados->email} <br>";

  // $professor = new Professor('debora@debora.com.br');
  // $professorDados = $professor->verProfessor();
  // echo "Nome: {$professorDados->nome} <br>";
  // echo "Telefone: {$professorDados->telefone} <br>";
  // echo "E-mail: {$professorDados->email} <br>";
  // echo "Especialidade: {$professorDados->especialidade} <br>";
  // echo "Salário: {$professorDados->salario} <br>";
  // echo "Idade: {$professor->calculaIdade($professorDados->data_nascimento)} <br>";
  // echo "Avaliação: {$professor->calculaAvaliacao()}";

  $professores = $conexao->listarProfessores();

  foreach ($professores as $key => $value) {
    echo $value['nome'] . " <br>";
  }
  ?>

  <br>
  <a href="cadastroProfessor.php"><button type="button">Novo Professor</button></a>

</body>

</html>