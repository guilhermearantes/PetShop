
    <!DOCTYPE HTML>

    <head>
        <?php include 'metaheader.php'; ?>

    </head>

    <body>

        <?php include 'body.php'; ?>

            <!-- Header End====================================================================== -->
            <div id="mainBody">
                <div class="container">
                    <div class="row">

                        <div class="span9">


                            <h3> Manutenção </h3>

                            <ul class="nav nav-tabs">
                                <li class="active"><a href="areaAdministrativa.php">Editar produtos:</a></li>
                                <li><a href="areaAdministrativa2.php">Adicionar produtos:</a></li>
                            </ul>

                            <!--tabela com todos os registros de produtos-->
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Preço</th>
                                        <th>Imagem</th>
                                </thead>
                                </tr>


                                <tbody>
                                    <?php
          
          
                    include 'config.php';

            
               require_once 'Connection.php';


                    // conecta ao banco de dados
		            $con = mysqli_connect($set_db_server, $set_db_username, $set_db_password, $set_db_base) or trigger_error(mysql_error(),E_USER_ERROR); 
		            $query = sprintf("SELECT id, nome, preco, imagem FROM produtos");
		            // executa a query
                    $dados = $con->query($query);
		            // transforma os dados em um array
		            $linha = mysqli_fetch_assoc($dados);
		            // calcula quantos dados retornaram
		            //var_dump($dados);
                    $total = $dados->num_rows;
        
        
          ?>

                                        <?php
          if($total > 0){
    
          do {
        ?>
                                            <tr>
                                      
                                                <td>
                                                    <?=$linha['nome']?>
                                                </td>
                                                <td>
                                                    <?=$linha['preco']?>
                                                </td>
                                                <td><img width="60" src="/PetShop/images/<?=$linha['imagem']?>.jpg" alt="" /></td>
                                            </tr>
                                            <?php
    
              }while($linha =mysqli_fetch_assoc($dados));
          }
        ?>

                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- MainBody End ============================= -->

            <!-- Placed at the end of the document so the pages load faster ============================================= -->
            <script src="themes/js/jquery.js" type="text/javascript"></script>
            <script src="themes/js/bootstrap.min.js" type="text/javascript"></script>
            <script src="themes/js/google-code-prettify/prettify.js"></script>

            <script src="themes/js/bootshop.js"></script>
            <script src="themes/js/jquery.lightbox-0.5.js"></script>


            <span id="themesBtn"></span>
            <div class="footer">

                <div class="copy_right">
                    <p>Guilherme Jannotti - UFOP ICEA <a href="https://sites.google.com/site/fboliveiraufop/disciplinas---2015-02/cea477---sistemas-para-a-web">Sistemas Web</a> </p>
                </div>
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