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