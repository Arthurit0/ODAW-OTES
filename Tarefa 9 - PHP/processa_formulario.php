<?php
// Verifica se todos os campos foram preenchidos
if (!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['senha']) && $_POST['genero'] != '' && !empty($_POST['interesses']) && $_POST['preferencias'] != '') {

    // Validar email
    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

        // Validar senha (mínimo de 8 caracteres)
        if (strlen($_POST['senha']) >= 8) {

            // Exibir mensagem de confirmação
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

// Função para validar login a partir de arquivo de autenticação
function validarLogin($usuario, $senha) {
    $autenticacao = file_get_contents('autenticacao.txt'); // Ler arquivo de autenticação
    $linhas = explode("\n", $autenticacao); // Dividir o conteúdo do arquivo em linhas
  
    foreach ($linhas as $linha) {
      $dados = explode(":", $linha); // Dividir cada linha em usuário e senha, separados por ':'
      $user = trim($dados[0]);
      $pass = trim($dados[1]);
      if ($user === $usuario && $pass === $senha) { // Verificar se usuário e senha informados correspondem aos dados de autenticação
        return true; // Usuário autenticado com sucesso
      }
    }
  
    return false; // Usuário ou senha inválidos
  }
  
  // Exemplo de uso da função de validação de login
  $usuario = 'fulano';
  $senha = 'senhaincorreta';
  if (validarLogin($usuario, $senha)) {
    echo "Usuário autenticado com sucesso!<br>";
  } else {
    echo "Usuário ou senha inválidos!<br>";
  }
  
  // Cifrar e validar senha usando a biblioteca bcrypt
  $senha_original = 'minha_senha';
  $senha_cifrada = password_hash($senha_original, PASSWORD_DEFAULT); // Cifrar a senha
  echo "Senha original: $senha_original <br>";
  echo "Senha cifrada: $senha_cifrada <br>";
  
  if (password_verify($senha_original, $senha_cifrada)) { // Verificar se a senha original é válida a partir da senha cifrada
    echo "Senha válida!";
  } else {
    echo "Senha inválida!";
  }

?>
