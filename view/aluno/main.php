<?php
  
    if(isset($_GET['loggout'])){
        Painel::loggout();
    }

    $url = isset($_GET['url']) ? $_GET['url'] : 'home';

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" type="image/ico" href="<?php echo INCLUDE_PATH; ?>favicon.ico"/>

  <title>Request - <?php echo ucfirst($url); ?></title>

  <!-- Bootstrap e estilo.css -->
  <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>assets/css/template/reset.css">
  <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>assets/css/aluno/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>assets/css/aluno/estilo.css">

  <!-- Importa Google Icon Font e materialize.css -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>assets/css/aluno/materialize.min.css"  media="screen,projection"/>

  <!-- Framework Bulma e Font Awesome -->
  <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>assets/css/template/all.css">
  <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>assets/css/aluno/bulma.min.css">

  <!-- Materialize - Para o navegador saber que o site é optimizado para dispositivos móveis -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>

    <base base="<?php echo INCLUDE_PATH; ?>" />

    <section class="hero is-fullheight" id="heroFull">
        <div class="navbar-fixed">
        <nav class="bgtopo has-navbar-fixed-top">
            <div class="nav-wrapper container-fluid">
            <div class="row">

                <div class="col l3 m3 s3 left">
                <a href="caixaentrada.html" class="valign-wrapper left hide-on-med-and-down logoLink">
                    <img id="logoRequest" src="<?php echo INCLUDE_PATH; ?>assets/images/logo_request.png">
                    <b class="hide-on-med-and-down left nomin" id="menuNome">REQUEST</b>
                </a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger">
                    <i class="material-icons">menu</i>
                </a>
                </div>

                <div class="col l5 m5 s5 hide-on-large-only">
                <a href="caixaentrada.html" class="">
                    <center>
                    <img id="logoRequestMobile" src="<?php echo INCLUDE_PATH; ?>assets/images/logo_request.png">
                    </center>
                </a>
                </div>

                <div class="col l5 m5 s5 hide-on-med-and-down">
                </div>

                <div class="col l4 m4 s4 nomeNotif">
                <div class="right">
                    <div class="dropdown" id="dropdownAlunoButton">
                    <button class="input-field dropdown-toggle" data-toggle="dropdown" id="downButton">
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <ul class="dropdown-menu" id="dropdownAlunoEstilo">
                        <li><a href="<?php echo INCLUDE_PATH; ?>?loggout">Sair</a></li>
                    </ul>
                    </div>
                </div>

                <div class="right hide-on-med-and-down">
                    <p id="nomeUsuario"><?php echo $_SESSION['nomeAluno']; ?></p>
                </div>

                <div class="right">
                    <button class="" id="sinoNotif">
                    <i class="fas fa-bell"></i>
                    </button>
                </div>
                </div>

            </div>
            </div>
        </nav>
        </div>
        <ul class="sidenav" id="mobile-demo">
        <li>
            <a href="<?php echo INCLUDE_PATH; ?>perfil" class="waves-effect" id="opcoesMenuMobile">
            <i class="material-icons" id="opcoesMenuMobile">person
            </i>Meu Perfil
            </a>
        </li>

        <li><div class="divider"></div></li>

        <li>
            <a href="<?php echo INCLUDE_PATH; ?>requerimento" class="waves-effect" id="opcoesMenuMobile">
            <i class="material-icons" id="opcoesMenuMobile">add_circle</i>Requerimento
            </a>
        </li>
        <li>
            <a href="<?php echo INCLUDE_PATH; ?>home" class="waves-effect" id="opcoesMenuMobile">
            <i class="material-icons" id="opcoesMenuMobile">home</i>Home
            </a>
        </li>
        <li>
            <a href="<?php echo INCLUDE_PATH; ?>historico" class="waves-effect" id="opcoesMenuMobile">
            <i class="material-icons" id="opcoesMenuMobile">history</i>Histórico
            </a>
        </li>
        <li>
            <a href="<?php echo INCLUDE_PATH; ?>ajuda" class="waves-effect" id="opcoesMenuMobile">
            <i class="material-icons" id="opcoesMenuMobile">info</i>Ajuda
            </a>
        </li>

        <li><div class="divider"></div></li>

        <div class="user-view">
            <div class="row">
            <b class="white-text">Etec Adolpho Berezin</b>
            </div>

            <div class="row">
            <i class="material-icons" id="opcoesMenuMobile">email</i>
            <p class="white-text email">etecadolpho@gmail.com</p>
            </div>

            <div class="row" id="contatosMobile">
            <i class="material-icons" id="opcoesMenuMobile">local_phone</i>
            <p class="white-text">(13) 3448-6373</p>
            <p class="white-text">(13) 3448-6373</p>
            </div>

            <b class="white-text">Redes Sociais</b>

            <div class="row">
            <div class="col l2 m2 s2">
                <a href="https://www.facebook.com/EtecAdolphoBerezin1995"><i class="fab fa-facebook" id="socialMobile"></i></a>
            </div>
            <div class="col l2 m2 s2">
                <a href="https://www.instagram.com/etecadolphoberezin/"><i class="fab fa-instagram" id="socialMobile"></i></a>
            </div>
            <div class="col l2 m2 s2">
                <a href="https://twitter.com/etecab"><i class="fab fa-twitter-square" id="socialMobile"></i></a>
            </div>
            </div>

        </div>
        </ul>
        <section class="main hide-on-med-and-down">
        <aside class="keep">
            <ul id="marginItens">
            <li>
                <a href="<?php echo INCLUDE_PATH; ?>perfil">
                <span><i class="material-icons">person</i></span>
                Meu perfil
                </a>
            </li>
            <li><div class="col l12 m12 s12 divider"></div></li>
            <li>
                <a href="<?php echo INCLUDE_PATH; ?>requerimento">
                <span><i class="material-icons">add_circle</i></span>
                Requerimento
                </a>
            </li>
            <li>
                <a href="<?php echo INCLUDE_PATH; ?>home">
                <span><i class="material-icons">home</i></span>
                Home
                <span class="notif red">1</span>
                </a>
            </li>
            <li>
                <a href="<?php echo INCLUDE_PATH; ?>historico">
                <span><i class="material-icons">history</i></span>
                Histórico
                </a>
            </li>
            <li>
                <a href="<?php echo INCLUDE_PATH; ?>ajuda">
                <span><i class="material-icons">info</i></span>
                Ajuda
                </a>
            </li>

            <li>
                <div class="col l12 m12 s12 divider"></div>
            </li>

            <li class="etecInfo center-align">
                <span><i class="material-icons">email</i></span>
                <p>etecadolpho@gmail.com</p>
            </li>
            <li class="etecInfo center-align">
                <span><i class="material-icons">local_phone</i></span>
                <p>(13) 3448-6373</p>
                <p>(13) 3448-6373</p>
            </li>
            <li class="etecSocial center-align">
                <b id="atSign">@</b>
                <br>
                <i onclick="window.location.href='https://www.facebook.com/EtecAdolphoBerezin1995'" id="social" class="fab fa-facebook" title="/EtecAdolphoBerezin1995"></i>
                <i onclick="window.location.href='https://www.instagram.com/etecadolphoberezin/'" id="social" class="fab fa-instagram" title="/etecadolphoberezin"></i>
                <i onclick="window.location.href='https://twitter.com/etecab'" id="social" class="fab fa-twitter-square" title="/etecab"></i>
            </li>
            </ul>
        </aside>
        </section>

        <div class="hero-body">
            <div class="container">
            <?php
                if(file_exists('view/aluno/'.$url.'.php'))
                {
                include('view/aluno/'.$url.'.php');
                }
                else{
                    if($url != 'home'){
                        include('404.php');
                    }
                    else{
                        include('home.php');
                    }
                }
            ?>
            </div>
        </div>
    </section>

    <!-- JavaScript no fim da body para optimizar o carregamento - Jquery e Bootstrap -->
    <script type="text/javascript" src="<?php echo INCLUDE_PATH; ?>assets/js/aluno/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="<?php echo INCLUDE_PATH; ?>assets/js/aluno/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo INCLUDE_PATH; ?>assets/js/aluno/comandos.js"></script>
    <script type="text/javascript" src="<?php echo INCLUDE_PATH; ?>assets/js/aluno/formulario.js"></script>
    <script type="text/javascript" src="<?php echo INCLUDE_PATH; ?>assets/js/aluno/const.js"></script>

    <!-- Materialize -->
    <script type="text/javascript" src="<?php echo INCLUDE_PATH; ?>assets/js/aluno/materialize.min.js"></script>

    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>

    <script>
        $(document).ready(function(){
            $('.sidenav').sidenav();
        });

    </script>

</body>
</html>
