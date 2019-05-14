<?php
    use PHPMailer\PHPMailer\PHPMailer;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Belfort Healthcare | Linha de Produtos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Representação e Distribuição de Produtos Hospitalares."/>
    <meta name="robots" content="index, follow"/>

    <meta name="google-site-verification" content="RpeGBWi5y_B5207wqb2V1WIGanN2EflEfeoXd9FTiMM" />

    <!-- Estilo para Mudar Cor do Browser em Smartphnes -->
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#00c0b3">
    
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#00c0b3">
    
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="msapplication-navbutton-color" content="#00c0b3">
    
    <link rel="author" href="http://plus.google.com/118160760093744046671/posts"/>
    <link rel="canonical" href="http://www.belforthealthcare.com.br">
    <link rel="alternate" type="application/rss+xml" href="rss.xml">
    
    <meta itemprop="name" content="Belfort Healthcare"/>
    <meta itemprop="description" content="Representação e Distribuição de Produtos Hospitalares."/>
    <meta itemprop="image" content="http://www.belforthealthcare.com.br/img/sitekit/index.jpg"/>
    <meta itemprop="url" content="http://www.belforthealthcare.com.br"/>
    
    <meta property="og:url" content="http://www.belforthealthcare.com.br/index.php" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Belfort Healthcare" />
    <meta property="og:description" content="Representação e Distribuição de Produtos Hospitalares." />
    <meta property="og:image" content="http://www.belforthealthcare.com.br/img/index.png" />
    
    <meta property="og:app_id" content="1532358607073758" />
    <meta property="article:author" content="https://www.facebook.com/ricardo.d.belfort" />
    
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- External Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- CSS Style -->
    <link rel="stylesheet" href="css/jquery-ui-style.css" />
    <link rel="stylesheet" href="css/custom.css" />
    <link rel="stylesheet" href="css/main-style.css" />
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.png" />

</head>
    
<body>
    <div id="preloader">
        <div id="status"></div>
    </div>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-125131743-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-125131743-1');
    </script>

    <!-- Header Principal -->
    <header class="main_header container bg-white" id="home">
        <div class="content-no">
            <h1 class="mb_logo main_logo left fzero">
                <a title="Belfort Healthcare" href="index.php">Belfort Healthcare
                </a>
            </h1>
            
            <div class="mobile_action"></div>

            <ul class="main_nav right">
                <li><a href="index.php" title="">Home</a></li>
                <li><a href="#uti" title="">UTI</a></li>
                <li><a href="#cirurgia" title="">Cirurgia</a></li>
                <li><a href="#cme" title="">CME</a></li>
                <li><a href="#farmacia" title="">Farmácia</a></li>
                <li><a href="#contato" title="">Contato</a></li>
            </ul>
            
            <div class="clear"></div>
        </div>
    </header>
    <!-- Fim do Header -->

    <section class="container bloco bg-blue">
        <div class="content-top">
            <header class="sectitle" style="margin-top:105px;">
                <h1 class="upper">Conheça nossa linha de produtos</h1>
            </header>
        </div>
        <div class="clear"></div>
    </section>

    <section class="container bg-light" id="uti">
        <div class="content-medium">
            <div class="flexbox flex_prod">
                <div class="box-large al-right flex_prod_end_img">
                    <img src="css/boot/icons/cardiogram.png" alt="Produtos para UTI" title="Produtos para UTI" />
                </div>
                <div class="box-large last flex_prod_desc">
                    <header class="title">
                        <h1>Produtos para UTI</h1>
                        <p class="tagline">Unidade de Terapia intensiva</p>
                        <ul>
                            <li>Ventilador Pulmonar</li>
                            <li>Aspirador Pulmonar</li>
                            <li>Monitor Multiparamétricos</li>
                            <li>Desfibrilador</li>
                            <li>Eletrocardiógrafo</li>
                        </ul>
                    </header>    
                </div>
                <div class="clear"></div>
            </div>
            
            <div class="clear"></div>
        </div>
    </section>

    <section class="container" id="cirurgia">
        <div class="content-medium">
            <div class="flexbox flex_prod_end">
                <div class="box-large flex_prod_desc">
                    <header class="title">
                        <h1>Produtos para Centro Cirúrgico</h1>
                        <ul>
                            <li>Focos</li>
                            <li>Mesas</li>
                            <li>Estativas</li>
                            <li>Instrumental cirúrgico</li>
                        </ul>
                    </header>    
                </div>    
                <div class="box-large last flex_prod_end_img">
                    <img src="css/boot/icons/electrocardiogram.png" alt="Produtos para UTI" title="Produtos para UTI" />
                </div>
                <div class="clear"></div>
            </div>
            
            <div class="clear"></div>
        </div>
    </section>

    <section class="container bg-light" id="cme">
        <div class="content-medium">
            <div class="flexbox flex_prod">
                <div class="box-large al-right flex_prod_end_img">
                    <img src="css/boot/icons/medical-kit.png" alt="Produtos para UTI" title="Produtos para UTI" />
                </div>
                <div class="box-large last flex_prod_desc">
                    <header class="title">
                        <h1>Produtos para CME</h1>
                        <p class="tagline">Central de Material de Esterilização</p>
                        <ul>
                            <li>Termodesinfectora</li>
                            <li>Autoclave</li>
                            <li>Sistema de Rastreabilidade</li>
                        </ul>
                    </header>    
                </div>
                <div class="clear"></div>
            </div>
            
            <div class="clear"></div>
        </div>
    </section>

    <section class="container" id="farmacia">
        <div class="content-medium">
            <div class="flexbox flex_prod_end">
                <div class="box-large flex_prod_desc">
                    <header class="title">
                        <h1>Produtos para Farmácia</h1>
                        <ul>
                            <li>Automação da logística de medicamentos e materiais</li>
                            <li>sistema de Unitarização</li>
                        </ul>
                    </header>    
                </div>    
                <div class="box-large last flex_prod_end_img">
                    <img src="css/boot/icons/pills.png" alt="Produtos para UTI" title="Produtos para UTI" />
                </div>
                <div class="clear"></div>
            </div>
            
            <div class="clear"></div>
        </div>
    </section>


    <section class="container bg-light" id="marcas">
        <div class="content-normal">
            <header class="title">
                <h1>Nossas Marcas</h1>
            </header>

            <div class="brand_cards">
                <div class="brand_cards_grid">
                    <a href="https://www.getinge.com/int/" target="_blank" rel="nofollow"><img src="img/getinge.png" alt="Getinge"></a>
                </div>
                <div class="brand_cards_grid">
                    <a href="https://br.nihonkohden.com/" target="_blank" rel="nofollow"><img src="img/nihon.png" alt="Nihon Kohden"></a>
                </div>
                <div class="brand_cards_grid">
                    <a href="https://opuspac.com/br/" target="_blank" rel="nofollow"><img src="img/opuspac.png" alt="Opuspac Hospital Automation"></a>
                </div>
                <div class="brand_cards_grid">
                    <a href="http://pulsartechnologies.com.br/" target="_blank" rel="nofollow"><img src="img/pulsar.png" alt="Pulsar Technologies"></a>
                </div>
                <div class="brand_cards_grid">
                    <a href="https://www.quinelato.com.br/" target="_blank" rel="nofollow"><img src="img/quinelato.png" alt="Quinelato Instrumentos Cirúrgicos"></a>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </section>
    <!-- FIM DA SESSÃO CLIENTES -->

    <!-- Bloco de Contato -->
    <article class="container bloco bg-form" id="contato">
        <div class="content-medium">
            <header class="sectitle">
                <h1 class="upper al-center">Fique Conectado com a gente!</h1>
            </header>
            
            <div class="box box-full">
                <form method="post" class="flex_form">
                    <fieldset class="box box-large flex_form_info">
                        <h3>INFORMAÇÕES DE CONTATO</h3>
                        <p class="tagline">Rua do Comercio, 89 - Parque Dez de Novembro <br> Manaus - AMCEP: 69054-000</p>
                        <p class="tagline">Tel: (92) 3346-9444</p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.05237424912!2d-60.01060038462808!3d-3.080694797756627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x926c1a93fe59f011%3A0xdc70f984474867a2!2sBelfort+Healthcare!5e0!3m2!1spt-BR!2sbr!4v1535581710476" width="100%" height="315px" frameborder="0" style="border:5px solid #fff;" allowfullscreen></iframe>
                    </fieldset>

                    <fieldset class="box box-large last flex_form_contact">

                        <?php

                        if(isset($_POST['btnSubmit'])){
                        // These must be at the top of your script, not inside a function
                        // use PHPMailer\PHPMailer\Exception;

                        //Load Composer's autoloader
                        require './PHPMailer/src/PHPMailer.php';
                        require './PHPMailer/src/Exception.php';
                        require './PHPMailer/src/SMTP.php';

                        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions

                        $nome = $_POST['remetenteNome'];
                        $email = $_POST['remetenteEmail'];
                        $assunto = $_POST['assunto'];
                        $mensagem = $_POST['mensagem'];


                        try {
                            //Server settings
                            $mail->isSMTP();                                      // Set mailer to use SMTP
                            $mail->Host = 'smtp.belforthealthcare.com.br';        // Specify main and backup SMTP servers
                            $mail->SMTPAuth = true;                               // Enable SMTP authentication
                            $mail->Username = 'contato@belforthealthcare.com.br'; // SMTP username
                            $mail->Password = 'Belfort2018';                      // SMTP password
                            $mail->Port = 587;                                    // TCP port to connect to

                            $mail->SMTPOptions = array(
                                'ssl' => array(
                                    'verify_peer' => false,
                                    'verify_peer_name' => false,
                                    'allow_self_signed' => true
                                )
                            );

                            //Recipients
                            $mail->setFrom('contato@belforthealthcare.com.br', 'Contato Site');
                            $mail->addAddress('contato@belforthealthcare.com.br', 'Contato Site');     // Add a recipient
                            $mail->addReplyTo($email, $nome);

                            //Content
                            $mail->isHTML(true);                                  // Set email format to HTML
                            $mail->Subject = $assunto;
                            $mail->Body    = $mensagem;
                            
                            $mail->send();
                                echo '<p style="color:green; font-size:1.2em; text-align:left;">Mensagem enviada com sucesso!</p>';
                            } catch (Exception $e) {
                                echo '<p style="color:red; font-size:1.2em; text-align:left;">Mensagem não enviada! Erro ao enviar. '. $mail->ErrorInfo . '</p>';
                            }                        
                        }
                        else {
                        
                        ?>


                        <h3>FALE CONOSCO</h3>
                        <label>
                            <input type="text" name="remetenteNome" required placeholder="Nome" />
                        </label>

                        <label>
                            <input type="email" name="remetenteEmail" required id="email" placeholder="E-mail" />
                        </label>

                        <label>
                            <input type="text" name="assunto" required placeholder="Assunto" />
                        </label>

                        <label>
                            <textarea name="mensagem" required rows="6" placeholder="Deixe sua mensagem..."></textarea>
                        </label>

                        <div class="form_action">
                            <input name="btnSubmit" class="btn btn-green upper" type="submit" value="Enviar Mensagem" />
                        </div>
                        <?php } 
                        ?>
                    </fieldset>
                    
                    <div class="clear"></div>
                </form>
            </div>

            <div class="clear"></div>
        </div>
    </article>
    <!-- Fim do Bloco de Contato -->

    <!-- Main Footer -->
    <footer class="main_footer container bg-dark">
        <div class="content flex_footer">
            <div class="grid-50 flex_footer_copy">
                <h1 class="fzero">Copy Right</h1>
                <p class="light fwhite left" style="margin-bottom:0;"><small style="color: #fff;">&copy; <?= date('Y'); ?> - Belfort Healthcare - Todos os Direitos Reservados</small></p>
            </div>
            
            <div class="grid-50 right flex_footer_social" style="text-align:right;">
                <ul class="social_nav">
                    <li><a href="https://www.facebook.com/Belfort-Healthcare-1752876741648305/" target="_blank" rel="nofollow" title="Belfort Healthcare no Facebook"><i class="fab fa-facebook-square fa-lg"></i>/belforthealthcare</a></li>
                    <li><a href="https://www.instagram.com/belfort_healthcare/" target="_blank" rel="nofollow" title="Belfort Healthcare no Instagram"><i class="fab fa-instagram fa-lg"></i>@belforthealthcare</a></li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </footer>
    <!-- Fim do Main Footer -->

    <!-- Google Analytics -->

    <!-- Main Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

    <!-- Custom JS -->
    <script src="js/custom.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/contact-form.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <script src="js/wow.js"></script>
    <script>new WOW().init();</script>
    <script>
        $(window).load(function() {
            $("#status").fadeOut();
            $("#preloader").delay(500).fadeOut("slow");
        });
    </script>
</body>
</html>