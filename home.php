<!DOCTYPE html>
<html lang="pt-br">

<?php include_once './assets/content/head.php'; ?>

<body>
    <?php include_once './assets/content/header.php'; ?>

    <section id="vitrine">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img_vitrine" src="<?php echo Link::getBase(); ?>assets/img/vitrine/1.png" alt="Primeiro Slide">
                </div>
                <div class="carousel-item">
                    <img class="img_vitrine" src="<?php echo Link::getBase(); ?>assets/img/vitrine/1.png" alt="Segundo Slide">
                </div>
                <div class="carousel-item">
                    <img class="img_vitrine" src="<?php echo Link::getBase(); ?>assets/img/vitrine/1.png" alt="Terceiro Slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <section id="marcas-pneus">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <h2 class="titulo_marcas">NOSSAS MARCAS</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <img class="img_marcas" src="<?php echo Link::getBase(); ?>assets/img/header/logo.png" alt="Marca 1">
                        </div>
                        <div class="item">
                            <img class="img_marcas" src="<?php echo Link::getBase(); ?>assets/img/header/logo.png" alt="Marca 2">
                        </div>
                        <div class="item">
                            <img class="img_marcas" src="<?php echo Link::getBase(); ?>assets/img/header/logo.png" alt="Marca 3">
                        </div>
                        <div class="item">
                            <img class="img_marcas" src="<?php echo Link::getBase(); ?>assets/img/header/logo.png" alt="Marca 4">
                        </div>
                        <div class="item">
                            <img class="img_marcas" src="<?php echo Link::getBase(); ?>assets/img/header/logo.png" alt="Marca 5">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="informacoes-pagamento">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 text-center">
                    <i class="far fa-credit-card"></i>
                    <p class="descricao-forma-pagamento">Em até 6x sem juros Cartão de Crédito</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 text-center">
                    <i class="fas fa-truck"></i>
                    <p class="descricao-forma-pagamento">FRETE GRÁTIS acima de R$ 299,00 pelos correios</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 text-center">
                    <i class="fas fa-hand-holding-usd"></i>
                    <p class="descricao-forma-pagamento">3% de desconto para pagamento no Boleto</p>
                </div>
            </div>
        </div>
    </section>

    <section id="produtos">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <h2 class="titulo_produtos">PRODUTOS</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                    <div class="card">
                        <img src="<?php echo Link::getBase(); ?>assets/img/produtos/pneu-pirelli-aro-16-scorpion-atr-205-60r16-92h-1.jpg" class="card-img-top" alt="img_produto">
                        <div class="card-body">
                            <h5 class="card-title">PNEU PIRELLI ARO 16 SCORPION ATR 205/60R16 92H</h5>
                            <p class="card-text">Original Chevrolet Spin Activ / Citroen Aircross / Fiat Strada Adventure / Ford EcoSport / Suzuki S-Cross</p>
                            <div class="row">
                                <a href="#" class="btn_consultar">Consultar Valor</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                    <div class="card">
                        <img src="<?php echo Link::getBase(); ?>assets/img/produtos/pneu-pirelli-aro-16-scorpion-atr-205-60r16-92h-1.jpg" class="card-img-top" alt="img_produto">
                        <div class="card-body">
                            <h5 class="card-title">PNEU PIRELLI ARO 16 SCORPION ATR 205/60R16 92H</h5>
                            <p class="card-text">Original Chevrolet Spin Activ / Citroen Aircross / Fiat Strada Adventure / Ford EcoSport / Suzuki S-Cross</p>
                            <div class="row">
                                <a href="#" class="btn_consultar">Consultar Valor</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                    <div class="card">
                        <img src="<?php echo Link::getBase(); ?>assets/img/produtos/pneu-pirelli-aro-16-scorpion-atr-205-60r16-92h-1.jpg" class="card-img-top" alt="img_produto">
                        <div class="card-body">
                            <h5 class="card-title">PNEU PIRELLI ARO 16 SCORPION ATR 205/60R16 92H</h5>
                            <p class="card-text">Original Chevrolet Spin Activ / Citroen Aircross / Fiat Strada Adventure / Ford EcoSport / Suzuki S-Cross</p>
                            <div class="row">
                                <a href="#" class="btn_consultar">Consultar Valor</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                    <div class="card">
                        <img src="<?php echo Link::getBase(); ?>assets/img/produtos/pneu-pirelli-aro-16-scorpion-atr-205-60r16-92h-1.jpg" class="card-img-top" alt="img_produto">
                        <div class="card-body">
                            <h5 class="card-title">PNEU PIRELLI ARO 16 SCORPION ATR 205/60R16 92H</h5>
                            <p class="card-text">Original Chevrolet Spin Activ / Citroen Aircross / Fiat Strada Adventure / Ford EcoSport / Suzuki S-Cross</p>
                            <div class="row">
                                <a href="#" class="btn_consultar">Consultar Valor</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                    <div class="card">
                        <img src="<?php echo Link::getBase(); ?>assets/img/produtos/pneu-pirelli-aro-16-scorpion-atr-205-60r16-92h-1.jpg" class="card-img-top" alt="img_produto">
                        <div class="card-body">
                            <h5 class="card-title">PNEU PIRELLI ARO 16 SCORPION ATR 205/60R16 92H</h5>
                            <p class="card-text">Original Chevrolet Spin Activ / Citroen Aircross / Fiat Strada Adventure / Ford EcoSport / Suzuki S-Cross</p>
                            <div class="row">
                                <a href="#" class="btn_consultar">Consultar Valor</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                    <div class="card">
                        <img src="<?php echo Link::getBase(); ?>assets/img/produtos/pneu-pirelli-aro-16-scorpion-atr-205-60r16-92h-1.jpg" class="card-img-top" alt="img_produto">
                        <div class="card-body">
                            <h5 class="card-title">PNEU PIRELLI ARO 16 SCORPION ATR 205/60R16 92H</h5>
                            <p class="card-text">Original Chevrolet Spin Activ / Citroen Aircross / Fiat Strada Adventure / Ford EcoSport / Suzuki S-Cross</p>
                            <div class="row">
                                <a href="#" class="btn_consultar">Consultar Valor</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <a href="<?php echo Link::getBase(); ?>produtos" class="btn_consultar">Visualizar Todos</a>
            </div>
        </div>
    </section>

    <section id="depoimentos">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <h2 class="titulo_depoimentos">DEPOIMENTOS</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div id="carousel-depoimentos" class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3 my-auto">
                                                    <img class="img-depoimentos" src="/_PLATAFORMA_Priorita/cms/modulo/depoimentos/img/310121065214497624292.png" alt="imagem Depoimento">
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-9 col-xxl-9 my-auto">
                                                    <h3 class="titulo-depoimentos">Jaqueline Azevedo</h3>
                                                    <p class="descricao-depoimentos">Duis pharetra porttitor tortor elementum condimentum vehicula aenean ornare habitant purus vehicula, sagittis quis por</p>
                                                    <p class="data-depoimentos">05/12/2020</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3 my-auto">
                                                    <img class="img-depoimentos" src="/_PLATAFORMA_Priorita/cms/modulo/depoimentos/img/310121065214497624292.png" alt="imagem Depoimento">
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-9 col-xxl-9 my-auto">
                                                    <h3 class="titulo-depoimentos">Jorge Luiz</h3>
                                                    <p class="descricao-depoimentos">Duis pharetra porttitor tortor elementum condimentum vehicula aenean ornare habitant purus vehicula, sagittis quis por</p>
                                                    <p class="data-depoimentos">05/12/2020</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3 my-auto">
                                                    <img class="img-depoimentos" src="/_PLATAFORMA_Priorita/cms/modulo/depoimentos/img/310121065214497624292.png" alt="imagem Depoimento">
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-9 col-xxl-9 my-auto">
                                                    <h3 class="titulo-depoimentos">Luiz Carlos</h3>
                                                    <p class="descricao-depoimentos">Duis pharetra porttitor tortor elementum condimentum vehicula aenean ornare habitant purus vehicula, sagittis quis por</p>
                                                    <p class="data-depoimentos">05/12/2020</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <form id="formNewsletter" action="/_PLATAFORMA_Priorita/source/newsletter/add/adicionar-newsletter.php" method="post" novalidate="novalidate">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-5 col-xl-5 col-xxl-5 my-auto">
                                <p class="descricao-newsletter">Fique por dentro de todas as nossas novidades!</p>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3 my-auto">
                                <input type="text" name="nome_newsletter" id="nome_newsletter" class="form-control" placeholder="Nome">
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3 my-auto">
                                <input type="text" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="E-mail">
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-1 col-xl-1 col-xxl-1 my-auto">
                                <button type="submit" class="botao-newsletter">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section id="maps">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
            <iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=Rua%20das%20Violetas%20686.%20Cuiab%C3%A1+()&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
        </div>
    </section>

    <?php include_once './assets/content/components.php'; ?>

    <?php include_once './assets/content/footer.php'; ?>

    <!-- Plugins JS -->
    <script src="<?php echo Link::getBase(); ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo Link::getBase(); ?>assets/vendor/popper/popper.min.js"></script>
    <script src="<?php echo Link::getBase(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo Link::getBase(); ?>assets/vendor/fontawesome/js/all.min.js"></script>
    <script src="<?php echo Link::getBase(); ?>assets/vendor/jQuery-Mask/dist/jquery.mask.min.js"></script>
    <script src="<?php echo Link::getBase(); ?>assets/vendor/jquery-validation/dist/jquery.validate.js"></script>
    <script src="<?php echo Link::getBase(); ?>assets/vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="<?php echo Link::getBase(); ?>assets/vendor/jquery-form/jquery-form.min.js"></script>
    <script src="<?php echo Link::getBase(); ?>assets/vendor/bootbox/bootbox.min.js"></script>
    <script src="<?php echo Link::getBase(); ?>assets/vendor/jquery-loading/dist/jquery.loading.min.js"></script>
    <script src="<?php echo Link::getBase(); ?>assets/vendor/toastr/toastr.min.js"></script>
    <script src="<?php echo Link::getBase(); ?>assets/vendor/owl.carousel/owl.carousel.min.js"></script>

    <!-- JS -->
    <script src="<?php echo Link::getBase(); ?>assets/js/default.js"></script>
</body>

</html>