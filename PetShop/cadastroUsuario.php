<?php


  $set_db_server = 'localhost';
  $set_db_username = 'sispetshop';
  $set_db_password = '123456';
  $set_db_base = 'petshop';

		         

    // conecta ao banco de dados
	$mysqli = new mysqli($set_db_server, $set_db_username, $set_db_password, $set_db_base);

    if(mysqli_connect_errno()) trigger_error(mysqli_connect_error()); 
        

      $nome = $_POST["nome"]; 
      $login = $_POST["login"];
      $senha = $_POST["senha"];
      $tipo = $_POST["tipo"];

    // Executa uma consulta que deleta uma notícia
    $sql = "INSERT INTO usuarios (nome, login, senha, tipo) VALUES ('$nome', '$login', '$senha', '$tipo')";
    $query = $mysqli->query($sql);


//exit('<script>location.href = "area_geral.php" </script>');
    //header("Location: http://localhost/tp02/product_summary.html");
    
    
    // encerra a conexão
    mysqli_close($mysqli);

?>