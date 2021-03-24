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
                <a href="#" class="btn_consultar">Visualizar Todos</a>
            </div>
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