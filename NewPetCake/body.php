    <body><div class="wrap">
        <div class="header">
            <div class="headertop_desc">

                <div class="account_desc">
                    <ul>
                        <li><a href="registrar.php">Registrar</a></li>
                        <li><a href="login.php">Login</a></li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
            <div class="header_top">
                <div class="logo">
                    <a href="home.php"><img src="images/logo.png" alt="" /></a>
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
        </body>
       