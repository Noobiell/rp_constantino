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


    <header id="headerContato" class="mb-5">
        <div class="d-flex flex-column text-center justify-content-center align-items-center h-100">
            <h1 class="tituloPvc branco">Contato</h1>
            <p class="textoPvc branco">Escolha a melhor forma de falar conosco</p>
        </div>
    </header>


    <article class="container mb-5">

        <div class="row">

            <div class="col-lg-6 mb-3">

                <div class="text-center mb-3">
                    <h1 class="tituloPag">
                        Mande uma mensagem
                    </h1>
                </div>

                <form id="formContato">

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome compleo">
                        <label for="nome">Nome completo*</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="celular" name="celular" placeholder="(00)00000-0000">
                        <label for="celular">Celular*</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="exemplo@email.com">
                        <label for="email">E-mail*</label>
                    </div>

                    <div class="form-floating mb-3">
                        <textarea class="form-control" placeholder="Escreva uma mensagem" id="mensagem" style="height: 100px"></textarea>
                        <label for="mensagem">Mensagem</label>
                    </div>

                    <div class="mb-3">
                        <select class="form-select form-select-lg" aria-label="Default select example">
                            <option selected disabled value="">Área de interesse</option>
                            <option value="paraVoce">Para você</option>
                            <option value="paraEmpresa">Para sua empresa</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <span class="avisoForm">
                            **Ao enviar, você concorda nossa equipe a entrar em contato com você
                        </span>
                    </div>

                    <button class="btn w-100 btnSaibaMais" type="submit">Enviar <i class="fa-solid fa-share"></i></button>

                </form>


            </div><!--Fim col-->

            <div class="col-lg-6">

                <img src="assets/img/bg_mesa_contato3.jpg" alt="Mesa com café e um bloco de anotações" class="img-fluid">

            </div><!--Fim col-->


        </div>

    </article>


    <article class="container mb-5">

        <div class="row mb-3 text-center">
            <h2>Como você prefere falar com a gente?</h2>
        </div>

        <div class="row">

            <div class="col-md-4">
                <div class="containerContato border">

                    <div class="d-flex flex-column gap-2">
                        <span class="fs-3 subTextoPag"><i class="fa-regular fa-envelope"></i></span>
                        <h6 class="fs-5 gold fw-bold">E-mail</h6>
                        <span class="subTextoPag">Tem alguma dúvida?</span>
                    </div>

                    <strong class="formaContato text-break">contato@rpconstantinoseguros.com.br</strong>

                </div>
            </div>
            <!--Fim col-->

            <div class="col-md-4">
                <div class="containerContato border">

                    <div class="d-flex flex-column gap-2">
                        <span class="fs-3 subTextoPag"><i class="fa-solid fa-phone-volume"></i></span>
                        <h6 class="fs-5 gold fw-bold">Telefone</h6>
                        <span class="subTextoPag">Você pode ligar a qualquer hora</span>
                    </div>

                    <strong class="formaContato">(15)9 9638-8800</strong>

                </div>
            </div>
            <!--Fim col-->

            <div class="col-md-4">
                <div class="containerContato border">

                    <div class="d-flex flex-column gap-2">
                        <span class="fs-3 subTextoPag"><i class="fa-brands fa-whatsapp"></i></span>
                        <h6 class="fs-5 gold fw-bold">Whatsapp</h6>
                        <span class="subTextoPag">Precisa de alguma ajuda agora?</span>
                    </div>

                    <strong class="formaContato">(15)9 9638-8800</strong>

                </div>
            </div>
            <!--Fim col-->

        </div>

    </article>


    <?php include("footer.php"); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>