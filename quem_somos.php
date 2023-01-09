<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- BOOTSTRAP CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!--FONTAWESOME-->
    <script src="https://kit.fontawesome.com/59f636855b.js" crossorigin="anonymous"></script>

    <!-- SWEET-ALERT -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- auto scroll -->
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.5.3/dist/js/splide-extension-auto-scroll.min.js"></script>

    <link rel="icon" href="assets/img/favIcon.png">
    <title>RP Constantino Seguros</title>
</head>

<body>

    <?php include("header.php"); ?>


    <header id="headerQuemSomos" class="mb-5">
        <div class="d-flex flex-column text-center justify-content-center align-items-center h-100">
            <h1 class="tituloPvc branco">Quem somos</h1>
            <p class="textoPvc branco">Atuamos em todo o Brasil</p>
        </div>
    </header>


    <article class="container">

        <div class="row mb-5">

            <div class="col-lg-6">

                <h1 class="tituloPag">
                    Sobre nós
                </h1>

                <p class="subTextoPag">
                    A RP Constantino Seguros tem uma consultoria especializada de mais de 10 anos no ramo de seguros. Temos como o foco prestar sempre o melhor serviço e encontrar a melhor solução para os nossos clientes, oferecendo um atendimento diferenciado com qualidade e agilidade.
                </p>

                <p class="subTextoPag">
                    Contamos com a parceria pelas maiores e melhores seguradoras do mercado, com o objetivo principal de oferecer as melhores condições junto ao mercado segurador.
                </p>

                <p class="subTextoPag">
                    A RP Constantino Seguros te dará a total confiança e tranquilidade em qualquer momento inesperado que poderá ocorrer.
                </p>


            </div><!--Fim col-->

            <div class="col-lg-6 mt-3">
                <img src="assets/img/sobre_nos.jpg" alt="Sobre nós" class="img-fluid">
            </div>

        </div><!--Fim row-->


        <div class="row mb-3">

            <div class="col-lg-6 mb-3">
                <img src="assets/img/missao_visao_valores.jpg" alt="Imagem crescimento da empresa" class="img-fluid">
            </div><!--Fim col-->

            <div class="col-lg-6">

                <div class="mb-3">
                    <h1 class="subTituloPa">MISSÃO</h1>
                    <p class="subTextoPag">Oferecer as melhores soluções em seguros, de acordo com a necessidade de cada pessoa e empresa, com o objetivo de proteger seu patrimônio e garantir a tranquilidade aos clientes.</p>
                </div>

                <div class="mb-3">
                    <h1 class="subTituloPa">VISÃO</h1>
                    <p class="subTextoPag">Ser reconhecida na melhor consultoria e gestão de seguros com foco no atendimento especializado e na excelência na prestação de serviços.</p>
                </div>

                <div class="mb-3">
                    <h1 class="subTituloPa">VALORES</h1>
                    <div class="containerValores">
                        <span class="subTextoPag"><i class="fa-regular fa-circle-check"></i> Ética</span>
                        <span class="subTextoPag"><i class="fa-regular fa-circle-check"></i> Transparência</span>
                        <span class="subTextoPag"><i class="fa-regular fa-circle-check"></i> Comprometimento</span>
                        <span class="subTextoPag"><i class="fa-regular fa-circle-check"></i> Eficiência</span>
                    </div>
                </div>

            </div>
        </div><!--Fim row-->

    </article>



    <?php include("footer.php"); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>