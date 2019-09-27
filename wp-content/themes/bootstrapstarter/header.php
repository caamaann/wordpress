<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- 
    CONTOH KALAU MAU ADD IMAGE : 
    - Masukin image ke folder img
    - panggil script dibawah ini, harus sama ya. nama filenya doang yg beda
    <img src="<?php echo get_bloginfo('template_url') ?>/img/171524024.jpg"> 
-->

<header>
    <div class="container-fluid bg-one">
        <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 my-auto">
                <div class="text inline">ACESSIBILIDADE</div>
                <div class="font-btn inline">
                    <div class="inline minus">-A</div>
                    <div class="inline plus">+A</div>
                </div>
            </div>
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                <div id="social-media">
                    <p>Administrador</p>
                    <div class="social-img">
                        <a href="https://twitter.com/Prefeitura_Rio">
                            <img src="<?php echo get_bloginfo('template_url') ?>/img/twitter.jpg">
                        </a>
                        <a href="https://www.facebook.com/PrefeituradoRio">
                            <img src="<?php echo get_bloginfo('template_url') ?>/img/facebook.jpg">
                        </a>
                        <a href="https://www.instagram.com/prefeitura_rio/">
                            <img src="<?php echo get_bloginfo('template_url') ?>/img/instagram.jpg">
                        </a>
                        <a href="https://www.youtube.com/channel/UCBf3rlo_iHd4kRePPhFXDUQ">
                            <img src="<?php echo get_bloginfo('template_url') ?>/img/youtube.jpg">
                        </a>
                    </div>
                </div>
                <div class="header-img">
                    <a id="img1" href="#">
                        <img src="<?php echo get_bloginfo('template_url') ?>/img/img1.jpg">
                    </a>
                    <a id="img2" href="https://www.1746.rio/">
                        <img src="<?php echo get_bloginfo('template_url') ?>/img/img2.jpg">
                    </a>
                    <a id="img3" href="http://prefeitura.rio/web/transparencia">
                        <img src="<?php echo get_bloginfo('template_url') ?>/img/img3.jpg">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-two">
        <a class="logo" href="#"><img src="<?php echo get_bloginfo('template_url') ?>/img/logo.jpg"></a>
        <div class="search-bar">
            <input type="search" placeholder="O que você procura?">
            <img src="<?php echo get_bloginfo('template_url') ?>/img/magnifier.jpg">
        </div>
        <nav class="navbar">
            <ul class="navbar-nav">
                <li class="nav-item first dropdown">
                    <a class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown" href="#">A PREFEITURA</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">ÓRGÃOS MUNICIPAIS</a>
                        <a class="dropdown-item" href="#">ARQUIVO DA CIDADE</a>
                        <a class="dropdown-item" href="#">ACESSO À INFORMAÇÃO</a>
                        <a class="dropdown-item" href="#">DOMÍNIO.RIO</a>
                        <a class="dropdown-item" href="#">DATA.RIO</a>
                        <a class="dropdown-item" href="#">PORTFÓLIO DE GESTÃO INSTITUCIONAL</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown" href="#">TURISMO</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">RIOTUR</a>
                        <a class="dropdown-item" href="#">RIOTUR.RIO</a>
                        <a class="dropdown-item" href="#">CIDADE DAS ARTES</a>
                        <a class="dropdown-item" href="#">PORTO MARAVILHA</a>
                        <a class="dropdown-item" href="#">ZOOLÓGICO</a>
                        <a class="dropdown-item" href="#">PLANETÁRIO</a>
                        <a class="dropdown-item" href="#">BIBLIOTECAS</a>
                        <a class="dropdown-item" href="#">CENTROS CULTURAIS</a>
                        <a class="dropdown-item" href="#">LONAS CULTURAIS</a>
                        <a class="dropdown-item" href="#">ARENAS CARIOCAS</a>
                        <a class="dropdown-item" href="#">MUSEUS</a>
                        <a class="dropdown-item" href="#">TEATROS</a>
                        <a class="dropdown-item" href="#">TEATROS DE GUIGNOL</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown" href="#">CIDADÃO</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">GUIA DE SERVIÇOS</a>
                        <a class="dropdown-item" href="#">CENTRAL DE ATENDIMENTO 1746</a>
                        <a class="dropdown-item" href="#">PROCON CARIOCA</a>
                        <a class="dropdown-item" href="#">CARIOCA DIGITAL</a>
                        <a class="dropdown-item" href="#">RIO MAIS FÁCIL</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a cclass="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown" href="#">SERVIDOR</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">PORTAL DO SERVIDOR</a>
                        <a class="dropdown-item" href="#">PREVIRIO</a>
                        <a class="dropdown-item" href="#">CONSULTA A PROCESSOS</a>
                        <a class="dropdown-item" href="#">CONSULTA ÀS LEGISLAÇÕES</a>
                        <a class="dropdown-item" href="#">SERVIÇOS COMPARTILHADOS</a>
                        <a class="dropdown-item" href="#">CONTRACHEQUES</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown" href="#">EMPRESA</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">E-COMPRAS RIO</a>
                        <a class="dropdown-item" href="#">LICENCIAMENTO E FISCALIZAÇÃO</a>
                        <a class="dropdown-item" href="#">IPTU</a>
                        <a class="dropdown-item" href="#">ISS</a>
                        <a class="dropdown-item" href="#">ITBI</a>
                        <a class="dropdown-item" href="#">TIS E OUTROS</a>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="#">OUVIDORIA</a></li>
            </ul>   
        </nav>
        <a class="logo-dropdown" href="#"><img src="<?php echo get_bloginfo('template_url') ?>/img/dropdown-menu.jpg"></a>
    </div>
</header>

<!-- <div class="blog-masthead">
    <div class="container">
        <nav class="blog-nav">
            <a class="blog-nav-item active" href="#">Home</a>
            <a class="blog-nav-item" href="#">New features</a>
            <a class="blog-nav-item" href="#">Press</a>
            <a class="blog-nav-item" href="#">New hires</a>
            <a class="blog-nav-item" href="#">About</a>
        </nav>
    </div>
</div> -->