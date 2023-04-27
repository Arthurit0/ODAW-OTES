<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        />
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <title>Document</title>
    </head>
    <body>
        <header class="display-4 text-center">Tarefa de PHP 9</header>

        <section class="container p-3 my-3 bg-primary">
            <form action="processa_formulario.php" method="post">
                <div>
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" required />
                </div>

                <div>
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" required />
                </div>

                <div>
                    <label for="senha">Senha:</label>
                    <input type="password" id="senha" name="senha" required />
                </div>

                <div>
                    <label for="genero">Gênero:</label>
                    <select id="genero" name="genero">
                        <option value="masculino">Masculino</option>
                        <option value="feminino">Feminino</option>
                        <option value="outro">Outro</option>
                    </select>
                </div>

                <div>
                    <label for="interesses">Interesses:</label>
                    <input
                        type="checkbox"
                        id="esportes"
                        name="interesses[]"
                        value="esportes"
                    />
                    <label for="esportes">Esportes</label>
                    <input
                        type="checkbox"
                        id="musica"
                        name="interesses[]"
                        value="musica"
                    />
                    <label for="musica">Música</label>
                    <input
                        type="checkbox"
                        id="cinema"
                        name="interesses[]"
                        value="cinema"
                    />
                    <label for="cinema">Cinema</label>
                </div>

                <div>
                    <label>Preferências:</label>
                    <input
                        type="radio"
                        id="sim"
                        name="preferencias"
                        value="sim"
                    />
                    <label for="sim">Sim</label>
                    <input
                        type="radio"
                        id="nao"
                        name="preferencias"
                        value="nao"
                    />
                    <label for="nao">Não</label>
                </div>

                <input type="submit" value="Enviar" />
                <input type="reset" value="Limpar" />
            </form>
        </section>
    </body>
</html>
