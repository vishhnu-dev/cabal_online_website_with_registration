<?php 
    $title = "Arcandius | 404 - Página Não encontrada";
    $description = "A página que você está procurando não existe.";
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title><?php echo $title ?></title>
        <meta name="description" content="<?php echo $description ?>" />
        
        <style>
            .container{
                max-width: 1140px;
                padding-right: 15px;
                padding-left: 15px;
                margin-left: auto;
                margin-right: auto;
            }
            picture, a{
                display: flex;
                justify-content: center;
            }
            @media (max-width:480px){
                picture img{
                    max-width: 360px;
                }
                h1{
                    font-size: 28px !important;
                }
                i{
                  font-size: 24px !important;  
                }
            }

            a{
                text-decoration: none;
                color: #7e7d7d;
            }
            h1{
                font-size: 30px;
                font-weight: bolder;
            }
            i{
                font-size: 35px;
                margin-right: 10px;
            }
        </style>
    </head>
    <body>
        <section class="ctn-404">
            <div class="container">
                <picture>
                    <img src="app/assets/img/404.png" title="We Sorry, but the page was not found :(">
                </picture>
                <a href="/?controller=routes&action=pagina_inicial">
                    <h1></i>Go to the main page !</h1>
                </a>
            </div>
        </section>
        <!--scripts-->
        <script src="https://kit.fontawesome.com/1a0c089da4.js" crossorigin="anonymous"></script>
        <!--end scripts-->
    </body>
</html>