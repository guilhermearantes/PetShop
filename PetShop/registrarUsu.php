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
    <?php include 'body.php'; ?>




        <!-- Header End====================================================================== -->
        <div id="mainBody">
            <div class="container">
                <div class="row">


                    <h3>  Cadastro de Usuário</h3>
                    <hr class="" />
                    <div class="modal-body">
                        <form class="form-horizontal loginFrm" method="post" action="cadastroUsuario.php" name="cadastrar">
                            <div class="control-group">
                                Digite seu nome:</br>
                                <input type="text" id="id_nome" name="nome" placeholder="Nome">
                            </div>
                            <div class="c</br>ontrol-group">
                                </br>Digite seu login: </br>
                                <input type="text" id="id_login" name="login" placeholder="Login">
                            </div>
                            <div class="control-group">
                                </br> Digite sua senha: </br>
                                <input type="password" id="id_senha" name="senha" placeholder="Senha">
                            </div>
                            </br>
                            <div class="control-group">
                                </br> Digite o tipo: </br>
                                <input type="text" id="id_tipo" name="tipo" placeholder="Tipo">
                            </div>
                            </br>
                            <button type="submit" class="btn btn-success">Cadastrar</button>
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
                        </form>

                    </div>
                </div>

                <hr class="" />



            </div>
        </div>
        </div>
        </div>
        <!-- MainBody End ============================= -->










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