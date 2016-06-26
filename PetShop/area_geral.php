

<!DOCTYPE HTML>

<head>
    <?php include 'metaheader.php'; ?>

</head>

<body>

    <?php include 'body.php'; ?>


        <!-- Sidebar end=============================================== -->

        <div class="main">
            <div class="content">
                <div class="content_top">
                    <div class="categories">
                        <h3>Nossas Produtos</h3>
                    </div>

                    <div class="clear"></div>
                </div>
                <?php
		          include 'config.php';

            
               require_once 'Connection.php';


            
                    // conecta ao banco de dados
		            $con = mysqli_connect($set_db_server, $set_db_username, $set_db_password, $set_db_base) or trigger_error(mysql_error(),E_USER_ERROR); 
		            // seleciona a base de dados em que vamos trabalhar
		          //  mysql_select_db($db, $con);
		            // cria a instrução SQL que vai selecionar os dados
		            $query = sprintf("SELECT id, nome, preco, imagem FROM produtos");
		            // executa a query
		           
                    $dados = $con->query($query);
		            // transforma os dados em um array
		            $linha = mysqli_fetch_assoc($dados);
		   
                
                    $total = $dados->num_rows;
        
		          ?>

                    <?php
		          if($total > 0){
		    
		          do {
		        ?>
                        <li class="span3">
                            <div class="thumbnail">
                                <table>
                                    <tr>

                                        <h5 style="text-align:center"<a   </br></br></br>  <img src="/PetShop/images/<?=$linha['imagem']?>.jpg" alt=""/>    </a></h5>

                                        <div class="caption">
                                           
                                            <h5 style="text-align:center"> <?=$linha['nome']?></h5></br>
                                            
                                            <h4 style="text-align:center">
                                            </br><?=$linha['preco']?> 
                                             <a class="btn" href="carrinho.php"></br>Adicionar ao Carrinho
                                            <i class="icon-shopping-cart"></i></a>  </h4>
                                        </div>
                                        
                                    </tr>

                                </table>


                            </div>
                        </li>

                        <?php
		    
		              }while($linha = $dados->fetch_assoc());
		          }
		        ?>



                            <div class="footer">

                                <div class="copy_right">
                                    <p>Guilherme Jannotti - UFOP ICEA <a href="https://sites.google.com/site/fboliveiraufop/disciplinas---2015-02/cea477---sistemas-para-a-web">Sistemas Web</a> </p>
                                </div>
                            </div>
                            <script type="text/javascript">
                                $(document).ready(function () {
                                    $().UItoTop({
                                        easingType: 'easeOutQuart'
                                    });

                                });
                            </script>
                            <a href="#" id="toTop"><span id="toTopHover"> </span></a>
</body>

</html>