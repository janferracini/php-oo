<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Estudante</title>
</head>

<body>

  <h1>Cadastrar novo Estudante</h1>
  <?php
  require './Pessoa.php';
  require './Estudante.php';

  //transforma em array
  $formData = filter_input_array(INPUT_POST, FILTER_DEFAULT);

  if (!empty($formData)) {
    $estudante = new Estudante($formData['email']);
    $cadastro = $estudante->criarEstudante($formData);
    //var_dump($formData);

    if ($cadastro) {
      echo "Estudante cadastrado com sucesso.";
    } else {
      echo "Erro ao cadastrar estudante";
    }
  }
  ?>


  <form action="" method="post" name="CadastroEstudante">
    <p>
      <label>Nome</label>
      <input name="nome" type="text" placeholder="Digite o nome" required>
    </p>
    <p>
      <label>Telefone</label>
      <input name="telefone" type="text" placeholder="Digite o telefone">
    </p>
    <p>
      <label>E-mail</label>
      <input name="email" type="text" placeholder="Digite o e-mail">
    </p>
    <p>
      <label>Data de Nascimento</label>
      <input name="data_nascimento" type="text" placeholder="Digite a data de nascimento" require>
    </p>
    <p>
      <label>Matrícula</label>
      <input name="matricula" type="text" placeholder="Digite a matrícula" require>
    </p>
    <input type="submit" value="Cadastrar" name="cadastrarEstudante">
  </form>
</body>

</html>