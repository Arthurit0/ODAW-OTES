<?php
if (!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['senha']) && $_POST['genero'] != '' && !empty($_POST['interesses']) && $_POST['preferencias'] != '') {

  if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

    if (strlen($_POST['senha']) >= 8) {
      echo "Obrigado por preencher o formulário!<br>";
      echo "Nome: " . $_POST['nome'] . "<br>";
      echo "E-mail: " . $_POST['email'] . "<br>";
      echo "Gênero: " . $_POST['genero'] . "<br>";
      echo "Interesses: " . implode(", ", $_POST['interesses']) . "<br>";
      echo "Preferências: " . $_POST['preferencias'] . "<br>";
    } else {
      echo "A senha deve ter no mínimo 8 caracteres.";
    }
  } else {
    echo "O email inserido não é válido.";
  }
} else {
  echo "Por favor, preencha todos os campos.";
}

function validarLogin($usuario, $senha)
{
  $autenticacao = file_get_contents('senhas.txt');
  $linhas = explode("\n", $autenticacao);

  foreach ($linhas as $linha) {
    $dados = explode(":", $linha);
    $user = trim($dados[0]);
    $pass = trim($dados[1]);
    if ($user === $usuario && $pass === $senha) {
      return true;
    }
  }

  return false;
}

// Exemplo de uso da função de validação de login
$usuario = 'fulano';
$senha = 'senha';
if (validarLogin($usuario, $senha)) {
  echo "Usuário autenticado com sucesso!<br>";
} else {
  echo "Usuário ou senha inválidos!<br>";
}

// Cifrar e validar senha
$senha_original = 'minha_senha';
$senha_cifrada = password_hash($senha_original, PASSWORD_DEFAULT); // Cifrar senha
echo "Senha original: $senha_original <br>";
echo "Senha cifrada: $senha_cifrada <br>";

if (password_verify($senha_original, $senha_cifrada)) { // Verificar se a senha original é válida a partir da senha cifrada
  echo "Senha válida!";
} else {
  echo "Senha inválida!";
}
