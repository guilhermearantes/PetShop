<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>

<head>
        <?php include 'metaheader.php'; ?>

</head>

<body>
    <div class="wrap">
        <div class="header">
            <div class="headertop_desc">

                <div class="account_desc">
                    <ul>
                        <li><a href="registrarUsu.php">Registrar</a></li>
                        <li><a href="login.php">Login</a></li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
            <div class="header_top">
                <div class="logo">
                    <a href="area_geral.php"><img src="images/logo.png" alt="" /></a>
                </div>

                <script type="text/javascript">
                    function DropDown(el) {
                        this.dd = el;
                        this.initEvents();
                    }
                    DropDown.prototype = {
                        initEvents: function () {
                            var obj = this;

                            obj.dd.on('click', function (event) {
                                $(this).toggleClass('active');
                                event.stopPropagation();
                            });
                        }
                    }

                    $(function () {

                        var dd = new DropDown($('#dd'));

                        $(document).click(function () {
                            // all dropdowns
                            $('.wrapper-dropdown-2').removeClass('active');
                        });

                    });
                </script>
                <div class="clear"></div>
            </div>
            <div class="header_bottom">
                <div class="menu">
                    <ul>
                        <li class="active"><a href="home.php">Home</a></li>
                        <li><a href="area_geral.php">Produtos</a></li>
                        <li><a href="area_cliente.php">Área Cliente</a></li>
                        <li><a href="area_admin.php">Área Administrativa</a></li>

                        <div class="clear"></div>
                    </ul>
                </div>

                <div class="clear"></div>
            </div>

        </div>

        </br>


        <form action="validarUsu.php" method="post">

            Login:
            <input type="text" name="usuario" />
            </br>
            </br>
            Senha:
            <input type="password" name="senha" />
            </br>
            </br>

            <input type="submit" name="validar" value="Acessar" />

        </form>

        <?php

      if (isset($_GET['erro'])) {
        if($_GET['erro'] == 1) {
          echo "<h3>Usuário e/ou senha inválidos!</h3>";
        }
      }

     ?>





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