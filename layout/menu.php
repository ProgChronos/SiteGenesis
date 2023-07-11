<div class="container-fluid position-relative p-0" id="nav">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
        <nav id="my-nav" class="men navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5 d-flex justify-content-center"
    style="
        top: 48px;
        border-radius: 90px;
        position: fixed;
        left: 50%;
        transform: translateX(-50%);
        width: 80%;
    ">
                <a href="home" class="navbar-brand">
                    <img src="img/Ativo 4.png" class="img-fluid" style="padding: 5%; width: 60%" srcset="">
                </a>
                <button id="toggle-button" type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="home" class="nav-item nav-link <?php if($local == "home")echo("active"); ?>">Home</a>

                        
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle <?php if($local == "genesis")echo("active"); ?>" data-toggle="dropdown" >Genesis</a>
                            <div class="dropdown-menu border-0 rounded-0 m-0">
                                <a href="genesis" class="dropdown-item <?php if($local == "genesis")echo("active"); ?>">Quem é?</a>
                                <a href="esg" class="dropdown-item <?php if($local == "esg")echo("active"); ?>">ESG</a>
                                <a href="linhadotempo" class="dropdown-item  <?php if($local == "linhadotempo")echo("active"); ?>">Linha do Tempo</a>
                                <a href="compliance" class="dropdown-item  <?php if($local == "compliance")echo("active"); ?>">Compliance</a>
                                <a href="legislacao" class="dropdown-item <?php if($local == "legislacao")echo("active"); ?>">Legislação</a>
                            </div>
                        </div>
                        <a href="prodserv.php" class="nav-item nav-link <?php if($local == "prodserv")echo("active"); ?>">Produtos e Serviços</a>

             
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle <?php if($local == "chronosPH" || $local == "xclusiveah" )echo("active"); ?>" data-toggle="dropdown">Projetos</a>
                                <div class="dropdown-menu border-0 rounded-0 m-0">
                                    <a href="chronosPH" class="dropdown-item">Chronos Palace Hotel</a>
                                    <a href="xclusiveah" class="dropdown-item">Xclusive Apart Hotel</a>
                             
                                </div>
                            </div>

                        <a href="contact.html" class="nav-item nav-link">Contato</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>