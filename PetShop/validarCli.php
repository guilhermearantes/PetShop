<link rel="stylesheet" href="css/bootstrap.min.css"> 
 
  <?php

  // Acesso ao Banco de dados

    require_once 'Connection.php';

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM clientes" . " WHERE login = '" . $usuario . "' " . "AND senha = ('" . $senha ."')"; 


$conexao = new Connection();
$resultado = $conexao->execute($sql);

if ($resultado->num_rows == 0){
    
    header ("Location: login.php?erro=1");
        
    }
else{
    session_start();
    session_cache_expire(40);
//    echo "Acesso realizado com sucesso!<br>";
//    echo "Sessão: " . session_id();

    echo "<br>Nome: " . session_name();
    
    $_SESSION['cliente'] = $_POST['usuario'];
//    $_SESSION['codigo'] = 9876;
//    $_SESSION['petshop'] = 1;
//    echo "Deu Certo Jow!";
    echo "<br>Nome: " . session_name();

}

die();
 ?>
