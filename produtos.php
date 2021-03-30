<!DOCTYPE html>
<html lang="pt-br">

<?php include_once './assets/content/head.php'; ?>
<link rel="stylesheet" href="<?php echo Link::getBase(); ?>assets/css/produtos.css">

<body>
     <?php include_once './assets/content/header.php'; ?>

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
                                        <a href="#" class="btn_consultar">Consultar Valor</a>
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
                                        <a href="#" class="btn_consultar">Consultar Valor</a>
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
                              <img src="<?php echo Link::getBase(); ?>assets/img/produtos/Pneus-para-tratores.jpeg" class="img_card" alt="img_produto">
                              <div class="card-body">
                                   <h5 class="card-title text-center">PNEUS PRA TRATORES</h5>
                                   <p class="card-text text-center"></p>
                                   <div class="row">
                                        <a href="#" class="btn_consultar">Consultar Valor</a>
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
                                        <a href="#" class="btn_consultar">Consultar Valor</a>
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
                                        <a href="#" class="btn_consultar">Consultar Valor</a>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
               <br>
               <br>
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