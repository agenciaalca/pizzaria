<!-- Footer Main -->
<footer id="footer-main" class="footer-main container-fluid no-padding">
    <div class="section-padding"></div>
    <!-- Container -->
    <div class="container">
        <!-- Widget About -->
        <aside class="col-md-8 col-sm-12 col-xs-12 ftr-widget about-widget">
            <div class="order-box">
                <form class="order-form"  method="post" action="index.php#formulario" name="formulario-contato" data-toggle="validator" role="form">>
                    <div class="form-group">
                        <input type="text" id="nome" name="nome" placeholder="Seu nome.." class="form-control" required />
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" id="email" name="email"  placeholder="Seu email.. " class="form-control" required />
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" id="telefone" name="telefone"  placeholder="Seu telefone.." class="form-control">
                    </div>
                    <div class="form-group">
                        <textarea id="mensagem" name="mensagem"  placeholder="Sua mensagem.." rows="6" class="form-control" required></textarea>
                        <div class="help-block with-errors"></div>
                    </div>
                    <input type="submit" title="Enviar" value="Enviar" name="btnContato">
                    <br>
                    <a name="formulario"></a>
                    <div class="mensagem-alerta col-md-12"><?php echo $msg ?> teste de como fica</div>

                </form>
            </div>
        </aside><!-- Widget About /- -->



        <!-- Widget Contact -->
        <aside class="col-md-4 col-sm-6 col-xs-6 ftr-widget contact-widget">
            <h3>Contato</h3>
            <div class="contact-info">
                <p><span><img src="images/endereco.png" width="30px"></span>Rua 115, Quadra 41-A, Lote 9 – Setor Sul.</p>
                <p><span><img src="images/fone.png" width="30px"></span>62. 3278-5151 <br>62. 9 9235-8068</p>
                <ul>
                    <li><a href="https://www.facebook.com/pizzanapedrago/" target="_blank" title="Facebbok"><i class="fa fa-facebook corAmarelo"></i></a></li>
                    <li><a href="https://www.instagram.com/pizzanapedrago/" target="_blank" title="Instagram"><i class="fa fa-instagram corAmarelo"></i></a></li>
                </ul>
            </div>
        </aside><!-- Widget Contact /- -->
        <div class="bottom-footer">
            <p>&copy;. ALL RIGHTS RESERVED. DESENVOLVIDO POR <a href="http://agenciaalca.com/"></a>AGÊNCIA ALCA</p>

        </div>
    </div><!-- Container /- -->
</footer><!-- Footer Main /- -->

<!-- JQuery v1.12.4 -->
<!--<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>-->
<script src="js/jquery-1.12.4.min.js"></script>
<script src="libraries/lib.js"></script><!-- Bootstrap JS File v3.3.5 -->

<!-- Library - Js -->
<script src="js/jquery-3.2.1.min.js"></script><!-- Bootstrap JS File v3.3.5 -->
<script src="js/instafeed.min.js"></script><!-- Bootstrap JS File v3.3.5 -->
<script src="js/slick.min.js"></script><!-- Bootstrap JS File v3.3.5 -->
<script src="js/instagramapi.js"></script><!-- Bootstrap JS File v3.3.5 -->


<!-- Library - Theme JS -->
<script src="js/functions.js"></script>
</body>
</html>