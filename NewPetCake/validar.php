<?php


    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
   
    //Acesso ao banco de dados

    $db_server = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_base = "academico";
    

    //conexão

    $connection = new mysqli($db_server, $db_username, $db_username, $db_password, $db_base);

    if($connection->connect_errno){
        
        echo "Falha na conexão com o Banco de Dados!" . 
            $connection -> connect_errno . " - " . 
            $connection->connect_error;
        
    }else{
        echo "Conexão realizada com sucesso!";
    }

    $sql = "SELECT * FROM alunos";

var_dump($connection);

    $result = $connection->query($sql);
    
    if($result){
        
    
    var_dump($result->fetch_all()); //variavel de debug
    }
        else{
            
            echo "erro";
        }
            

    while($row = $result->fetch_assoc()){
        
        echo $row["id"] . " - " . $row["nome"] . "<br />";
        
    }
    


        
    die();
    //recuperar e validar as informacoes


 //   if( $usuario != "admin" || $senha != "123"){
        
   //     header("location: index.php?erro=1");
     //   echo "<h1> Usuario ou senha invalidos! <h1>";
                
//    }
  //      else {
            
    //        echo"<h1>Seja bem-vindo $usuario! <h1>";
            
      //  }
        
        



    //retornar

//   echo "<h1> Seja bem-vindo(a) $usuario !<h1>";


?>