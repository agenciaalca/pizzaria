<?php include_once 'header.php'; ?>
<?php include_once 'mail.php'; ?>

<main class="site-main page-spacing" id="home">
    <!-- Photo Slider -->
    <div class="photo-slider container-fluid no-padding">
        <!-- Main Carousel -->
        <div id="main-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div role="listbox" class="carousel-inner">
                <div class="item active">
                    <img width="1920" height="500" alt="slider" src="images/slide1.jpg" alt="Banner - Pizza Na Pedra">
                    <div class="carousel-caption">
                        <h3>Pizza mais recheada de Goiânia</h3>
                        <!-- <p>The one day when the lady met this fellow and they knew it was much more than a hunch the first mate and his Skipper too will do their comfortable knew it hunch the first mate.</p> -->
                    </div>
                    <!-- <span class="goto-next"><a href="#order-section"><i class="fa fa-arrow-down bounce" aria-hidden="true"></i>scroll down</a></span> -->
                </div>
                <div class="item">
                    <img width="1920" height="500" alt="slider" src="images/slide2.jpg" alt="Banner - Pizza Na Pedra">
                    <div class="carousel-caption">
                        <h3>O melhor BUFFET da cidade</h3>
                        <!-- <p>The one day when the lady met this fellow and they knew it was much more than a hunch the first mate and his Skipper too will do their comfortable knew it hunch the first mate.</p> -->
                    </div>
                    <!-- <span class="goto-next"><a href="#order-section"><i class="fa fa-arrow-down bounce" aria-hidden="true"></i>scroll down</a></span> -->
                </div>
                <div class="item">
                    <img width="1920" height="500" alt="slider" src="images/slide3.jpg" alt="Banner - Pizza Na Pedra">
                    <div class="carousel-caption">
                        <h3>Todos os dias pelo menos uma promoção no nosso aplicativo</h3>
                        <!-- <p>The one day when the lady met this fellow and they knew it was much more than a hunch the first mate and his Skipper too will do their comfortable knew it hunch the first mate.</p> -->
                    </div>
                    <!-- <span class="goto-next"><a href="#order-section"><i class="fa fa-arrow-down bounce" aria-hidden="true"></i>scroll down</a></span> -->
                </div>
                <a class="left carousel-control" href="#main-carousel" role="button" data-slide="prev">
                    <i class="fa fa-caret-left" aria-hidden="true"></i>
                </a>
                <a class="right carousel-control" href="#main-carousel" role="button" data-slide="next">
                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                </a>
            </div>
        </div><!-- Main Carousel /-  -->
    </div><!-- Photo Slider /- -->



    <!-- About Section -->
    <div class="about-section container-fluid no-padding" id="sobre">
        <!-- Container -->
        <div class="container">
            <div class="col-md-5 col-sm-5 col-xs-6 about-img">
                <img src="images/sobre.jpg" alt="Sobre"  />
            </div>
            <div class="col-md-7 col-sm-7 col-xs-6 about-content">
                <!-- Section Header -->
                <div class="section-header">
                    <h3 class="corAmarelo">A PIZZA NA PEDRA</h3>
                    <h5>Sobre nós</h5>
                </div><!-- Section Header /- -->
                <div class="about-box">
                    <p>A melhor pizza de Goiânia! A Pizza na Pedra destaca-se pela criatividade, composição de diferentes sabore mas, principalmente, pela quantidade de recheio.
                        Feitas artesanalmente com massa fresca, aberta no ato do pedido e dentro dos mais rigorosos padrões de qualidade, criando um jeito regionalista de combinar sabores e texturas.</p>
                </div>
            </div>
        </div><!-- Container /- -->
    </div><!-- About Section /- -->



    <!-- Features Section -->
    <div id="features-section" class="features-section container-fluid no-padding">
        <div id="buffet">
            <!-- Container -->
            <div class="container">
                <!-- Section Header -->
                <div class="section-header">
                    <h3>Buffet Pizza na Pedra</h3>
                    <!-- <h5>Pizzada</h5> -->
                </div><!-- Section Header /- -->
                <div class="col-md-4 col-sm-12">
                    <div class="features-content">
                        <!-- <img src="images/pizza_1.png" alt="features-ic"  /> -->
                        <h3>Conforto</h3>
                        <p>Levamos o forno e assamos todas as pizzas na hora, dentre 12 sabores que você escolhe do nosso cardápio de 40 diferentes pizzas.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="features-content">
                        <!-- <img src="images/pizza_2.png" alt="features-ic"  /> -->
                        <h3>Incluso</h3>
                        <p>Coca Cola, Guaraná Antarctica, Suco de Uva, Pêssego, Laranja e Água mineral sem gás.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="features-content">
                        <!-- <img src="images/pizza_3.png" alt="features-ic"  /> -->
                        <h3>Cortesia</h3>
                        <p>Pensando na melhor estrutura para você, nós ainda disponibilizamos Pratos, Copos e Talheres.</p>
                    </div>
                </div>
            </div><!-- Container /- -->
        </div>
    </div><!-- Features Section /- -->


    <!-- Order Section 2 -->
    <div id="order-section" class="order-section order-section-2 container-fluid no-padding">
        <!-- Container -->
        <div class="container">
            <div class="col-md-5 col-sm-5 col-xs-12 order-right-content">
                <!-- Section Header -->
                <div class="section-header left-heder">
                    <h3 class="corAmarelo">MONTE SUA PIZZA</h3>
                    <!-- <h5>FAÇA SEU PEDIDO</h5> -->
                    <p>Quer nos sugerir algum sabor de pizza especial? Deixe aqui a sua ideia que iremos estudar com bastante carinho a possibilidade de fazermos ela (;</p>
                </div><!-- Section Header /- -->
                <div class="call-us">
                    <h5>Caso prefira, nos ligue ou mande um WhatsApp</h5>
                    <p class="corAmarelo"><i class="fa fa-phone" aria-hidden="true"></i>62 3278-5151</p>
                    <p class="corAmarelo"><i class="fa fa-whatsapp" aria-hidden="true"></i>62 9 9235-8068</p>
                </div>
                <!-- <h3 class="delivery-heading"><span class="corAmarelo">*</span>ENTREGA GRATUITA DENTRO DE 10 KM DE DISTÂNCIA</h3> -->
            </div>
            <div class="col-md-7 col-sm-7 col-xs-12 order-left">
                <div class="img-box">
                    <div class="order-box">
                        <div class="order-title">
                            <h3>Monte já!</h3>
                        </div>
                        <form class="order-form" method="post" action="index.php#formsugestao" id="formulario-sugestao" name="formulario-sugestao" data-toggle="validator" role="form">
                            <div class="form-group">
                                <input type="text" id="fsNome" name="fsNome" placeholder="Seu nome.." class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" id="fsEmail" name="fsEmail" placeholder="Seu email.. " class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" id="fsTelefone" name="fsTelefone" placeholder="Seu telefone.." class="form-control">
                            </div>

                            <div class="form-group">
                                <textarea id="fsSugestao" name="fsSugestao" placeholder="Sua sugestão de pizza.." rows="6" class="form-control"></textarea>
                            </div>
                            <input type="submit" title="Enviar" value="Enviar" name="btnSugestao">
                            <a name="formsugestao"></a>
                            <div class="mensagem-alerta col-md-12"><?php echo $msgSugestao ?></div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- Container /- -->
        <div class="section-padding"></div>
    </div><!-- Order Section 2 -->

    <!-- Menu Section -->
    <div class="menu-section container-fluid no-padding" id="cardapio">
        <div class="section-padding"></div>
        <!-- Container -->
        <div class="container">
            <!-- Section Header -->
            <div class="section-header">
                <h3>NOSSAS PIZZAS</h3>
                <h5>E nosso Aplicativo</h5>
                <p>Nós temos 40 sabores diferentes de pizzas, todas contemplando nosso maior diferencial: <strong>O Recheio</strong>. <br>
                    Temos a pizza mais recheada e saborosa de Goiânia ;)<br>
                    Para ver nosso cardápio completo, baixe nosso aplicativo "<strong>Pizza na Pedra - Oficial</strong>", disponível para Android e iOS.</p>
            </div><!-- Section Header /- -->

            <div class="menu-details-tab">
                <!-- Nav tabs -->
                <ul class="col-md-12 no-padding nav nav-tabs" role="tablist">
                    <li class="col-md-6 col-sm-12 col-xs-12">
                        <div class="col-md-6 col-sm-6 col-xs-4">
                            <a href="#" data-toggle="modal" data-target="#lightbox"> 
                                <p><i><img src="images/card1.jpg" alt="cardápio - pizza na pedra"/></i></p>
                            </a>
                        </div>
                    </li>
                    <li class="col-md-6 col-sm-12 col-xs-12">
                        <div class="col-md-6 col-sm-6 col-xs-4">
                            <a href="#" data-toggle="modal" data-target="#lightbox"> 
                                <p><i><img src="images/card2.jpg" alt="cardápio - pizza na pedra"/></i></p>
                            </a>
                        </div>
                    </li>
                    <li class="col-md-6 col-sm-12 col-xs-12 active" role="presentation">
                        <div class="col-md-6 col-sm-6 col-xs-4">
                            <a href="#" data-toggle="modal" data-target="#lightbox"> 
                                <p><i><img src="images/card3.jpg" alt="cardápio - pizza na pedra"/></i></p>
                            </a>
                        </div>
                    </li>
                    <li class="col-md-6 col-sm-12 col-xs-12" role="presentation">
                        <div class="col-md-6 col-sm-6 col-xs-4">
                            <a href="#" data-toggle="modal" data-target="#lightbox"> 
                                <p><i><img src="images/card4.jpg" alt="cardápio - pizza na pedra"/></i></p>
                            </a>
                        </div>
                    </li>
                    <li class="col-md-6 col-sm-12 col-xs-12" role="presentation">
                        <div class="col-md-6 col-sm-6 col-xs-4">
                            <a href="#" data-toggle="modal" data-target="#lightbox"> 
                                <p><i><img src="images/card5.jpg" alt="cardápio - pizza na pedra"/></i></p>
                            </a>
                        </div>
                    </li>
                    <li class="col-md-6 col-sm-12 col-xs-12" role="presentation">
                        <div class="col-md-6 col-sm-6 col-xs-4">
                            <a href="#" data-toggle="modal" data-target="#lightbox"> 
                                <p><i><img src="images/card6.jpg" alt="cardápio - pizza na pedra"/></i></p>
                            </a>
                        </div>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content col-md-6 col-sm-6 col-xs-12 menu-center">
                    <div role="tabpanel" class="tab-pane active" id="margheritapizza">
                        <div class="menu-content-box">
                            <img src="images/app.jpg" alt="app" class="app" />
                            <br>
                            <h3>Pizza na Pedra - Oficial</h3>
                            <h5>Clique no link do Sistema Operacional do seu celular.</h5>
                            <a href="https://play.google.com/store/apps/details?id=br.com.tpzz.pizzanapedra&hl=pt_BR" target="_blank" title="Android" class="buy-now">Android</a>
                            <a href="https://itunes.apple.com/br/app/pizza-na-pedra-oficial/id1110795735?mt=8" target="_blank" title="iOS" class="buy-now">iOS</a>
                        </div>

                    </div>
                </div>
            </div><!-- Container /- -->
            <div id="lightbox" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <button type="button" class="close hidden" data-dismiss="modal" aria-hidden="true">×</button>
                    <div class="modal-content">
                        <div class="modal-body">
                            <img src="" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Menu Section /- -->
    <div class="section-padding hidden-md hidden-lg"></div>
    <!-- incluindo carousel do instagram -->
    <div id="instafeed" class="instafeed"></div>
</main>


<?php include_once 'footer.php'; ?>
