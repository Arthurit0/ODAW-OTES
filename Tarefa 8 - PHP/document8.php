<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>

<body>
    <h1 class="display-6 text-center"><?php
                                        // Mostrar data e hora atual
                                        function mostrarDataHoraAtual()
                                        {
                                            date_default_timezone_set('America/Sao_Paulo');
                                            $data = date('d/m/Y');
                                            $hora = date('H:i') . 'h';
                                            echo "Hoje é $data e agora são $hora<br>";
                                        }
                                        mostrarDataHoraAtual();

                                        // Exemplo de uso de "function", manipulação de Strings e Arrays
                                        function inverterNome($nome)
                                        {
                                            $nomeSeparado = explode(' ', $nome);
                                            $nomeInvertido = $nomeSeparado[count($nomeSeparado) - 1];
                                            for ($i = count($nomeSeparado) - 2; $i >= 0; $i--) {
                                                $nomeInvertido .= ' ' . $nomeSeparado[$i];
                                            }
                                            return $nomeInvertido;
                                        }

                                        $nomeCompleto = 'João Silva Souza';
                                        echo 'Nome completo: ' . $nomeCompleto . '<br>';
                                        echo 'Nome invertido: ' . inverterNome($nomeCompleto) . '<br>';

                                        // Contador de visitas usando arquivo txt
                                        $contador = file_get_contents('contador.txt');
                                        $contador++;
                                        file_put_contents('contador.txt', $contador);
                                        echo "Esta página foi visitada $contador vezes.<br>";

                                        // // Exemplo de uso de "Cookie"
                                        if (isset($_COOKIE['nome'])) {
                                            echo 'Olá ' . $_COOKIE['nome'] . ', seja bem-vindo de volta!<br>';
                                        } else {
                                            setcookie('nome', 'João', time() + 3600); //cookie válido por 1 hora
                                            echo 'Olá visitante, esperamos que goste do nosso site!<br>';
                                        }

                                        // Exemplo de uso de "Session"
                                        // session_start();
                                        // if (isset($_SESSION['nome'])) {
                                        //     echo 'Olá ' . $_SESSION['nome'] . ', seja bem-vindo de volta!<br>';
                                        // } else {
                                        //     $_SESSION['nome'] = 'João';
                                        //     echo 'Olá visitante, esperamos que goste do nosso site!<br>';
                                        // }
                                        ?></h1>



</body>

</html>