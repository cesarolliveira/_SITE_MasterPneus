<!DOCTYPE html>
<html lang="pt-br">

<?php include_once './assets/content/head.php'; ?>

<body>
    <?php include_once './assets/content/header.php'; ?>

    <section id="vitrine">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img_vitrine" src="<?php echo Link::getBase(); ?>assets/img/vitrine/img-vitrine-1.jpeg" alt="Primeiro Slide">
                </div>
                <div class="carousel-item">
                    <img class="img_vitrine" src="<?php echo Link::getBase(); ?>assets/img/vitrine/img-vitrine-1.jpeg" alt="Segundo Slide">
                </div>
                <div class="carousel-item">
                    <img class="img_vitrine" src="<?php echo Link::getBase(); ?>assets/img/vitrine/img-vitrine-1.jpeg" alt="Terceiro Slide">
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
                            <img class="img_marcas" src="<?php echo Link::getBase(); ?>assets/img/marcas/bridgestone.png" alt="Marca 1">
                        </div>
                        <div class="item">
                            <img class="img_marcas" src="<?php echo Link::getBase(); ?>assets/img/marcas/durable.png" alt="Marca 2">
                        </div>
                        <div class="item">
                            <img class="img_marcas" src="<?php echo Link::getBase(); ?>assets/img/marcas/goodride.png" alt="Marca 3">
                        </div>
                        <div class="item">
                            <img class="img_marcas" src="<?php echo Link::getBase(); ?>assets/img/marcas/goodyear.png" alt="Marca 4">
                        </div>
                        <div class="item">
                            <img class="img_marcas" src="<?php echo Link::getBase(); ?>assets/img/marcas/milhelin.png" alt="Marca 5">
                        </div>
                        <div class="item">
                            <img class="img_marcas" src="<?php echo Link::getBase(); ?>assets/img/marcas/xbri.png" alt="Marca 5">
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
                    <p class="descricao-forma-pagamento">Em até 12x sem juros Cartão de Crédito</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 text-center">
                    <i class="fas fa-truck"></i>
                    <p class="descricao-forma-pagamento">FRETE GRÁTIS acima de R$ 3000,00 em pedidos</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 text-center">
                    <i class="fas fa-hand-holding-usd"></i>
                    <p class="descricao-forma-pagamento">3% de desconto para pagamento à vista</p>
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
                        <img src="<?php echo Link::getBase(); ?>assets/img/produtos/Pneu-road-cruize.jpeg" class="img_card" alt="img_produto">
                        <div class="card-body">
                            <h5 class="card-title text-center">PNEU ROAD CRUIZE VÁRIAS MEDIDAS DO ARO 14 AO 18</h5>
                            <p class="card-text text-center">Pneu misto off roud indicado pra asfalto e terra com durabilidade e conforto</p>
                            <div class="row">
                                <a target="_blank" href="https://api.whatsapp.com/send?phone=556541416616&text=Ol%C3%A1%2C%20gostaria%20de%20saber%20mais%20sobre%20os%20seus%20produtos!" class="btn_consultar">Consultar Valor</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                    <div class="card">
                        <img src="<?php echo Link::getBase(); ?>assets/img/produtos/Pneu-xbri-Brutus.jpeg" class="img_card" alt="img_produto">
                        <div class="card-body">
                            <h5 class="card-title text-center">PNEU XBRI BRUTUS</h5>
                            <br>
                            <p class="card-text text-center">Pneus com performance excelente pra uso em estradas arenosas ou pedreiras</p>
                            <div class="row">
                                <a target="_blank" href="https://api.whatsapp.com/send?phone=556541416616&text=Ol%C3%A1%2C%20gostaria%20de%20saber%20mais%20sobre%20os%20seus%20produtos!" class="btn_consultar">Consultar Valor</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                    <div class="card">
                        <img src="<?php echo Link::getBase(); ?>assets/img/produtos/Pneus-bf.jpeg" class="img_card" alt="img_produto">
                        <div class="card-body">
                            <h5 class="card-title text-center">PNEUS BF GOODRUCH VÁRIOS TAMANHOS</h5>
                            <p class="card-text text-center"></p>
                            <div class="row">
                                <a target="_blank" href="https://api.whatsapp.com/send?phone=556541416616&text=Ol%C3%A1%2C%20gostaria%20de%20saber%20mais%20sobre%20os%20seus%20produtos!" class="btn_consultar">Consultar Valor</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                    <div class="card">
                        <img src="<?php echo Link::getBase(); ?>assets/img/produtos/Pneus-para-tratores.jpeg" class="img_card" alt="img_produto">
                        <div class="card-body">
                            <h5 class="card-title text-center">PNEUS PRA TRATORES</h5>
                            <p class="card-text text-center"></p>
                            <div class="row">
                                <a target="_blank" href="https://api.whatsapp.com/send?phone=556541416616&text=Ol%C3%A1%2C%20gostaria%20de%20saber%20mais%20sobre%20os%20seus%20produtos!" class="btn_consultar">Consultar Valor</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                    <div class="card">
                        <img src="<?php echo Link::getBase(); ?>assets/img/produtos/Pneus-para-maquinas.jpeg" class="img_card" alt="img_produto">
                        <div class="card-body">
                            <h5 class="card-title text-center">PNEUS PARA MÁQUINAS</h5>
                            <p class="card-text text-center"></p>
                            <div class="row">
                                <a target="_blank" href="https://api.whatsapp.com/send?phone=556541416616&text=Ol%C3%A1%2C%20gostaria%20de%20saber%20mais%20sobre%20os%20seus%20produtos!" class="btn_consultar">Consultar Valor</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                    <div class="card">
                        <img src="<?php echo Link::getBase(); ?>assets/img/produtos/Pneus-para-carga.jpeg" class="img_card" alt="img_produto">
                        <div class="card-body">
                            <h5 class="card-title text-center">PNEUS PARA CARGA</h5>
                            <p class="card-text text-center"></p>
                            <div class="row">
                                <a target="_blank" href="https://api.whatsapp.com/send?phone=556541416616&text=Ol%C3%A1%2C%20gostaria%20de%20saber%20mais%20sobre%20os%20seus%20produtos!" class="btn_consultar">Consultar Valor</a>
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
                                                    <img class="img-depoimentos" src="<?php echo Link::getBase(); ?>assets/img/depoimentos/Foto.jpeg" alt="imagem Depoimento">
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
                                                    <img class="img-depoimentos" src="<?php echo Link::getBase(); ?>assets/img/depoimentos/Foto.jpeg" alt="imagem Depoimento">
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
                                                    <img class="img-depoimentos" src="<?php echo Link::getBase(); ?>assets/img/depoimentos/Foto.jpeg" alt="imagem Depoimento">
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

    <section id="mensagem">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <p class="descricao-mensagem">A Master pneus empresa genuinamente matogrossense que trabalha pra melhor servir com os melhores produtos e o menor preço. Temos sempre um bom negócio em pneus para você, sua empresa, fazenda ou indústria. Temos vendedores qualificados pra melhor lhe atender. Master pneus na medida da sua necessidade.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="maps">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3842.0155518072283!2d-56.18582818514683!3d-15.644160289144791!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTXCsDM4JzM5LjAiUyA1NsKwMTEnMDEuMSJX!5e0!3m2!1spt-BR!2sbr!4v1617060670731!5m2!1spt-BR!2sbr" width="100%" height="350px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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