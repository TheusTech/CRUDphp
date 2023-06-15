<?php 
session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>

    <style> 
body{
    background-color: #ccc;
    text-align: center;


}

main{
    /* Estilos para o elemento main */

  margin: 100px auto; /* Centraliza o main na página */
  max-width: 800px; /* Define uma largura máxima para o main */
  padding: 20px;
  background-color: #f5f5f5;
  box-shadow: 0 10px 4px rgba(0, 0, 0, 0.1);
  border-radius: 15px;
}

/* Estilos para tornar o main responsivo em telas menores */
@media screen and (max-width: 600px) {
  main {
    margin: 10px;
    padding: 10px;
  }
}

form {
  max-width: 400px; /* Define uma largura máxima para o formulário */
  margin: 0 auto; /* Centraliza o formulário na página */
  padding: 20px;
  background-color: #f5f5f5;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

/* Estilos para os rótulos */
form label {
  display: block;
  margin-bottom: 8px;
  font-weight: bold;
}

/* Estilos para os campos de entrada */
form input[type="text"],
form input[type="email"],
form input[type="password"] {
    text-align: center;
  width: 100%;
  padding: 10px;
  margin-bottom: 16px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

/* Estilos para o botão de envio */
form input[type="submit"] {
  width: 100%;
  padding: 12px;
  background-color: #4CAF50;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* Estilos para o botão de envio quando hover */
form input[type="submit"]:hover {
  background-color: #45a049;
}



</style>

</head>
<body>
    <main>
           <h1>CADASTRO DE USUÁRIO</h1>
    
    <?php 
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset ($_SESSION['msg']);

    }   
    ?>

<form method="POST" action="processar.php">
<label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required><br><br>

        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" required><br><br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" required><br><br>

        <label for="confirmar_senha">Confirmar Senha:</label>
        <input type="password" name="confirmar_senha" id="confirmar_senha" required><br><br>

        <input type="submit" value="Enviar">
    </form>
    </main>

</body>
</html>