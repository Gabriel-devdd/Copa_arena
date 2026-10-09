<?php

include "conexao.php";

$resultado = $conexao->query("SELECT * FROM jogadores");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de cadastros</title>
</head>
<body>

    <h1 style = "text-align: center; color: red;">Cadastros</h1>

        <table border = 1 style = "text-align: center; margin: auto">
            <tr>
                <th>ID</th>
                <th>Nickname</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Usuário Discord</th>
                <th>Cidade</th>
                <th>Plataforma</th>
                <th>Jogo</th>
            </tr>

            <?php while ($linha = $resultado->fetch_assoc()) { ?>

            <tr>

                <td><?php echo $linha['id_jogador']; ?></td>
                <td><?php echo $linha['Nickname']; ?></td>
                <td><?php echo $linha['Nome']; ?></td>
                <td><?php echo $linha['Email']; ?></td>
                <td><?php echo $linha['Telefone']; ?></td>
                <td><?php echo $linha['Usuario_discord']; ?></td>
                <td><?php echo $linha['Cidade']; ?></td>
                <td><?php echo $linha['Plataforma']; ?></td>
                <td><?php echo $linha['Jogo']; ?></td>

            </tr>
            <?php } ?>
        </table>

    <a href = "index.php" style= "text-align: center; margin: auto; ">Cadastro</a>
</body>
</html>