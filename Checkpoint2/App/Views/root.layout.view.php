<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="public/css.css">
    </head>
    <body>



            <nav class="navbar navbar-expand-md bg-dark navbar-dark">

                <!-- Brand -->
                <a class="navbar-brand" href="?c=home"><img src="https://www.shareicon.net/data/32x32/2015/09/01/94003_xiaomi_512x512.png" alt="logo"></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="?c=home">Domov</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?c=Blog">Data</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                Telefóny
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="mi9tpro.html">Xiaomi Mi 9T Pro</a>
                                <a class="dropdown-item" href="minote10.html">Xiaomi Mi Note 10</a>
                            </div>
                        <li class="nav-item">
                            <a class="nav-link" href="?c=home&a=contact">Kontakt</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </nav>

    </div>
    <div class="web-content">
        <?= $contentHTML ?>
    </div>
    </body>
</html>
