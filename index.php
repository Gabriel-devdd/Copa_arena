<?php

include "conexao.php";
$nickname = "";
$nome = "";
$email = "";
$telefone = "";
$usuario_discord = "";
$cidade = "";
$plataforma = "";
$jogo = "";
$mensagem = "";

if ($_SERVER['REQUEST_METHOD']==='POST'){
    $nickname = $_POST['nickname'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $usuario_discord = $_POST['usuario_discord'];
    $cidade = $_POST['cidade'];
    $plataforma = $_POST['plataforma'] ?? '';
    $jogo = $_POST['jogo'] ?? '';

    if($nickname === "" || $nome === "" || $email === "" || $telefone === "" || $usuario_discord === "" || $cidade === "" || $plataforma === "" || $jogo === ""){
        $mensagem = "Preencha todos os campos!";
    }else{
        $sql = "INSERT INTO jogadores (Nickname,Nome,Email,Telefone,Usuario_discord,Cidade,Plataforma,Jogo) 
        VALUES ('$nickname','$nome','$email','$telefone','$usuario_discord','$cidade','$plataforma','$jogo')";
        $conexao->query($sql);
        $mensagem = "Cadastro Realizado com sucesso";
        $nickname = "";
        $nome = "";
        $email = "";
        $telefone = "";
        $usuario_discord = "";
        $cidade = "";
        $plataforma = "";
        $jogo = "";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Copa Arena</title>
</head>
<body style = "background-color: #d485fe">

    <h1 style = 
        "text-align: center;
        margin: auto; 
        box-shadow: 0px 5px 10px;
        background-color: purple;
        color: yellow;
        width: 300px;
        border-radius: 10px">
        Arena Game House
    </h1>
    <br>

    <h3 style = "text-align: center; color: yellow">Increva-se na copa arena</h3>

    <form action = "index.php" method = "POST">

        <input type="text" name="nickname" placeholder="Nickname" value ="<?php echo $nickname; ?>">

        <input type="text" name="nome" placeholder="Nome" value ="<?php echo $nome; ?>">

        <input type="text" name="email" placeholder="Email" value ="<?php echo $email; ?>">

        <input type="number" name="telefone" placeholder="Telefone" value ="<?php echo $telefone; ?>">

        <input type="text" name="usuario_discord" placeholder="Usuário Discord" value ="<?php echo $usuario_discord; ?>">

        <input type="text" name="cidade" placeholder="Cidade" value ="<?php echo $cidade; ?>">

        <select name="plataforma" id="plataforma">

            <option value="" disabled selected>Selecione a sua plataforma</option>
            <option value = "PC">PC</option>
            <option value = "Console">Console</option>
            <option value = "Celular">Celular</option> 

        </select>


        <select name="jogo" id="jogo">

            <option value="" disabled selected>Selecione o jogo</option>
            <option value = "Valorant">Valorant</option>
            <option value = "League of Legends">League of Legends</option>
            <option value = "EA FC">EA FC</option> 

        </select>

        <button type= "submit">Cadastrar</button>
        <button type="button" onclick="window.location.href = 'consulta.php'"> Consultar </button>

    </form>

    <?php if ($mensagem !== "") { ?>
    <p><?php echo $mensagem; ?></p>
    <?php } ?>


    
</body>
</html>