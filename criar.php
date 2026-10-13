<?php include "db.php"; ?>

<h2>Criar Aluno</h2>

<form method="post">
    Nome: <input type="text" name="nome"><br>
    Idade: <input type="text" name="idade"><br>
    Email: <input type="text" name="email"><br>
    
    <input type="submit" value="Guardar">
</form>

<?php

if (isset($_POST["nome"])) {
    
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $email = $_POST["email"];
    
    $conn->query("INSERT INTO alunos (nome, idade, email)
                  VALUES ('$nome', $idade, '$email')");
                  
    echo "✔️ Aluno criado com sucesso!";
}

?>

<br><a href="index.php">⬅ Voltar</a>