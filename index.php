<?php 
    $title = "Arcandius - Página Inicial | MMORPG Gratuito";
    $description = "Servidor Brasileiro MMORPG Gratuito com gráficos 3D que contém elementos de jogador contra jogador (PVP) e jogador contra o ambiente (PVE). Totalmente Gratuito !";
    function generateRandomString($length = 15) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++)
            $randomString .= $characters[rand(0, $charactersLength - 1)];

        return $randomString;
    } 
    # CSRF protection
    $_SESSION['user_token'] = generateRandomString();
    $_SESSION['user_token_field'] = generateRandomString();
    $_SESSION['user_full_name'] = generateRandomString();
    $_SESSION['user_username'] = generateRandomString();
    $_SESSION['user_password'] = generateRandomString();
    $_SESSION['user_confirmpassword'] = generateRandomString();
    $_SESSION['user_email'] = generateRandomString();
    $_SESSION['user_whatsapp'] = generateRandomString();
    $_SESSION['user_securitykey'] = generateRandomString();
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo $title ?></title>
        <meta name="description" content="<?php echo $description ?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="public/ms-icon-144x144.png">
        <meta name="theme-color" content="#ff7f50">

        <link rel="canonical" href="http://localhost:8000" />
        <link rel="apple-touch-icon" sizes="57x57" href="public/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="public/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="public/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="public/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="public/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="public/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="public/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="public/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="public/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="public/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="public/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="public/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="public/favicon-16x16.png">
        <link rel="manifest" href="public//manifest.json">

        <!-- Facebook Open Graph data -->
        <meta property="og:locale" content="pt_BR" />
        <meta property="og:url" content="http://localhost:8000" />
        <meta property="og:title" content="<?php echo $title ?>" />
        <meta property="og:site_name" content="Arcandius MMO" />
        <meta property="og:type" content="website"/>
        <meta property="og:description" content="<?php echo $description ?>" />
        <meta property="og:image" content="public/Arcandius.png" />
        <meta property="og:image:type" content="png" />
        <meta property="og:image:width" content="206" />
        <meta property="og:image:height" content="206" />

        <!-- Stylesheets -->
        <link rel="stylesheet" href="app/assets/stylesheets/index.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
              integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Roboto Google Font's -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="body">
        <!-- Pre header -->
        <section class="main-reader">
            <section id="pre-header" class="pre-header">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-6 col-md-6">
                            <div class="col-md-6 download text-start">
                                <button type="submit" class="btn btn-primary apply-effect" data-toggle="tooltip"
                                        data-placement="right" data-original-title="Clique para Baixar !">
                                    <i class="fa fa-cloud-download"></i>
                                </button>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-6 text-right">
                            <a href="https://chat.whatsapp.com/GkxmJYtUlUP1e9i6v4nCw3" target="blank"
                               title="WhatsApp" data-toggle="tooltip" data-placement="bottom"
                               data-original-title="WhatsApp" class="whats">
                                <i class="fa fa-whatsapp" style="margin-right: 15px; margin-top: 30px;"></i>
                            </a>
                            <!-- <a href="#" target="blank" title="Visite-nos no Facebook" data-toggle="tooltip"
                               data-placement="bottom" data-original-title="Conheça nosso facebook." , class=" fb">
                                <i class="fa fa-facebook-square"></i>
                            </a> -->
                        </div>
                    </div>
                </div>
            </section>

            <!-- header -->
            <section class="header">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-md-9">

                            <ul class="nav nav-tabs menu">
                                <li>
                                    <h1 class="logo" data-toggle="tooltip" data-placement="bottom"
                                 data-original-title="">Arcandius</h1>
                                </li>
                                <li role="presentation" class="presentation" data-toggle="tooltip" data-placement="right" data-original-title="Free to Play">
                                    <a class="black-color link" href="#start">
                                        <i class="fa fa-play-circle" aria-hidden="true"></i> <b>Jogar</b>
                                    </a>
                                </li>
                                <!-- <li role="presentation">
                                    <a class="black-color link" href="#rates">Rates</a>
                                </li>
                                <li role="presentation ">
                                    <a class="black-color link" href="#classes">Classes</a>
                                </li> -->
                            </ul>
                        </div>
                        <div class="col-xs-12 col-md-3 text-right sv-br">
                            <p>
                                <small style="font-size: 14px;color:greenyellow;">Servidor</small> 
                                <small style="font-size: 14px;color:yellow;">Brasileiro</small> 
                                <i class="fa fa-check" style="font-size: 16px; color: greenyellow;">!</i>
                            </p>
                            <img src="app/assets/img/brasil.png" alt="Servidor Brasileiro !" data-toggle="tooltip" data-placement="bottom"
                                 data-original-title="Servidor Brasileiro!" class="br-flag" style="height: 65px;">
                        </div>
                    </div>
                </div>
            </section>
        </section>

        <!-- Conteúdo -->
        <section class="content" id="start">
            <div class="container">
                <div class="row">
                    <!-- desktop -->
                    <div class="col-md-6 hidden-xs hidden-sm">
                        <div class="row">

                            <!-- Botão Registre-se -->
                            <div class="col-md-12 text-center login-request main-bg apply-effect-2">
                                <h2>Não Tem Cadastro?</h2>
                                <info class="white-color info">Clique abaixo e Registre-se</info>
                                <br>
                                <button type="submit" class="btn btn-primary no-bg apply-effect btn-registro-account">
                                    <i class="fa fa-user-plus"></i> Criar Conta
                                </button>
                            </div>

                            <!-- Botão login -->
                            <div class="col-md-12 text-center new-account-request main-bg apply-effect-2">
                                <div class="side-effect-I apply-effect"></div>
                                <h2>Opa, Já Se Registrou?</h2>
                                <info class="white-color info">Não perca tempo!</info>
                                <br>
                                <info class="white-color info">Clique abaixo e logue no painel.</info>
                                <br>
                                <!-- ----------------------  Important  ---------------------- -->
                                <!-- Este botão sem a classe btn-login não abre o formulário de login (Em breve)-->
                                <button type="submit" class="btn btn-primary no-bg apply-effect"><i
                                            class="fa fa-sign-in"></i> Login(Em breve)
                                </button>
                                <!-- --------------------------------------------------------- -->
                            </div>
                        </div>
                    </div>

                    <!-- mobile -->
                    <div class="col-md-6 visible-xs visible-sm mobile-mode" style="padding: 15px;">
                        <div class="row">
                            <div class="col-xs-6">
                                
                                <button type="submit" class="btn btn-primary apply-effect btn-registro-account-mob">
                                    <i class="fa fa-user-plus"></i><br>Cadastre-se
                                </button>
                            </div>
                            <div class="col-xs-6">
                                <!-- ----------------------  Important  ---------------------- -->
                                <!-- Este botão sem a classe  btn-login-mob não abre o formulário de login (Em breve)-->
                                <button type="submit" class="btn btn-primary apply-effect">
                                    <i class="fa fa-sign-in"></i><br>(Login Em breve)
                                </button>
                                <!-- --------------------------------------------------------- -->
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 formulario-box main-bg padding15">

                        <!-- Formulário de  Login -->
                        <!-- <form class="login-form" action="" method="POST" accept-charset="utf-8">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="white-color text-center">Login</h2>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-user-o black-color icon-size"></i>
                                            </div>
                                            <input name="username" type="text" class="form-control input-lg" id="user_username" placeholder="Username">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-lock black-color icon-size"></i>
                                            </div>
                                            <input name="senha" type="password" class="form-control input-lg" id="user_password" placeholder="Senha">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-md-6 text-center">
                                        <button type="button" class="btn btn-primary no-bg apply-effect btn-close">
                                            <span aria-hidden="true">
                                                <i class="fa fa-close">
                                                </i> Fechar
                                            </span>
                                        </button>
                                    </div>
                                    <div class="col-xs-6 col-md-6 text-center">
                                        <button type="submit" class="btn btn-primary no-bg apply-effect btn-registro">
                                            <i class="fa fa-key"></i> Entrar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form> -->

                        <!-- login-request -->
                        <?php include 'app/views/sing_up_form.php' ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- Bem Vindo msg -->
        <div class="legal-text" style="margin-top: 2px;">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <h1 class="white-color text-bold">Bem vindo ao mundo de <small style="color: coral;">Arcandius</small> !</h1>
                    </div>
                    <div class="col-xs-12- col-sm-3 img">
                        <img class="e-girl" src="app/assets/img/perso.png" alt="Bem vindo ao mundo de Arcandius!" data-toggle="tooltip" data-placement="bottom" data-original-title="Quem Rusha Dropa, Bora Jogar xD">
                    </div>
                    <div class="col-xs-12- col-sm-9">
                        <p class="info text-bolder text-justify white-color ashura" style="margin-top: 10px;">
                            Qualquer ato proviniente do uso relacionado a Arcandius Games é de responsabilidade unica do
                            usuário. A Arcandius Games é um Servidor sem fins lucrativos.
                        </p>
                    </div>

                </div>
            </div>
        </div>

        <!-- Rodapé -->
        <section class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 text-left">
                        <p class="lead white-color text-bold mobile-text-center">
                            <small style="color: coral;">Arcandius</small> <i class="fa fa-copyright"></i> 2021
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-6 text-right">
                        <p class="lead text-bold vishnu">
                            <a class="white-color system-author link" data-toggle="tooltip" data-placement="top"
                               data-original-title="Clique para contato" href="https://linklist.bio/vishnu-dev" target="_blank"
                               style="font-size:16px;">
                                <small style="font-size: 10px;">Desenvolvido por:</small>
                                <small class="white-color sriracha">Vishnu</small>
                                <i class="fa fa-mobile" aria-hidden="true"></i>
                                <i class="fa fa-tablet" aria-hidden="true"></i>
                                <i class="fa fa-desktop" aria-hidden="true"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- END -->
        <div class="g-recaptcha" data-callback="onSubmit" data-size="invisible" data-sitekey="6LdXtEYcAAAAAO5YgEEb9qoqPQmQfCmG3JlH0aKT"></div>

        <!-- Whatsapp POPUP-->
        <a href="https://discord.gg/ZSk7BgQm6H" class="discord-pop-up" data-toggle="tooltip"
           data-placement="top" data-original-title="Discord" target="_blank">
            <img src="app/assets/img/discord-icon.png" alt="" style="height:60px;">
        </a>

        <!-- Arrow up -->
        <div class="ancor-up hidden-xs" data-toggle="tooltip" data-placement="right"
             data-original-title="Voltar ao topo do site.">
            <i class="fa fa-arrow-up"></i>
        </div>

        <!-- Whatsapp POPUP-->
        <a href="https://chat.whatsapp.com/GkxmJYtUlUP1e9i6v4nCw3" class="whats-pop-up" data-toggle="tooltip"
           data-placement="top" data-original-title="WhatsApp" target="_blank">
            <i class="fa fa-whatsapp"></i>
        </a>

        <!-- Scripts -->
        <!-- Jquery 3 -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
                integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <!-- precisam estar depois do jquery, dependências -->
        <!-- jquery ui effects -->
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        <!-- main js -->
        <script type="text/javascript" src="app/assets/javascripts/index.js"></script>
        <script type="text/javascript" src="app/assets/javascripts/vishnu's_secrets.js"></script>
        <script type="text/javascript" src="app/assets/javascripts/jquery-mask.js"></script>

        <!-- Bootstrap 3 https://getbootstrap.com/docs/3.3/css/ -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
                integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
                crossorigin="anonymous"></script>
        <!-- FontAwesome-->
        <script src="https://use.fontawesome.com/0d636355a5.js"></script>
        <!-- sweetalert -->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    </body>
</html>