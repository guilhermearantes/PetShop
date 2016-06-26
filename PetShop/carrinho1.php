<?php

    session_start();

    if(!isset($_SESSION['carrinho'])){
        
        $_SESSION['carrinho'] = array();
        
    }

    //adiciona produto

    if(isset($_GET['acao'])){
        
        if($_GET['acao'] == 'add'){
            
            $id = intval($_GET['id']);
            
            if(isset($_SESSION['carrinho']['id'])){
                $_SESSION['carrinho']['id'] = 1;    
            }
            
        }else{
            
            $_SESSION['carrinho']['id'] += 1;
        }
        
        
    }

      

?>



    <!DOCTYPE HTML>

    <head>
        <?php include 'metaheader.php'; ?>

    </head>

    <body>


        <table>

            <caption>Carrinho de Compras</caption>
            <thead>

                <tr>

                    <th width="244">Produto</th>
                    <th width="79">Quantidade</th>
                    <th width="89">Preço</th>
                    <th width="100">Subtotal</th>
                    <th width="64">Remover</th>


                </tr>


            </thead>

            <form action="?acao-up" method="post">

                <tfoot>

                    <tr>

                        <td colspan="5">
                            <input type="submit" value="Atualizar Carrinho" /> </td>
                        <td colspan="5"> <a href="area_geral.php" value="Continuar Comprando" /> </td>

                    </tr>

                </tfoot>




            </form>

        </table>




        <?php 
                
                if(count($_SESSION['carrinho']) == 0 ){
                    
                    echo '<tr><td colspan="5">Não há produto no carrinho </td></tr>';
                    
                }else{
                    
                    require ("config.php");
                    
	                $mysqli = new mysqli($set_db_server, $set_db_username, $set_db_password, $set_db_base);
                    if(mysqli_connect_errno()) trigger_error(mysqli_connect_error()); 


                    
                    foreach($_SESSION['carrinho'] as $id => $qtd){
                        
                        $sql = "SELECT * FROM produtos where id  = '$id'";
                        
                        $qr = $mysqli->query($sql);

                        
                       // $qr = mysqli_query($sql) or die(mysql_error());
                        $ln = mysqli_fetch_assoc($qr);
                        
                        $nome = $ln['nome'];
                        
                        $preco = $ln['preco'];
                        
                        $sub = $ln['preco'] * $qtd;
                    
                        echo '
                            <tr>
                                <td> '. $nome . ' </td>
                                <td> <input type="text" size="3" name="prod[.$id.]" value=" ' . $id .'   " </td>
                                <td> ' . $preco . ' </td>
                                <td> ' . $sub . ' </td>
                                <td> <a href="#"> Remover  </td>                                
                        
                            </tr>';
                        
                    
                        
                    }
                    
                }
            
            
?>







    </body>

    </html>