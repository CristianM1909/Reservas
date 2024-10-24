<?php  include_once 'views/template/header-principal.php'; 
include_once 'views/template/portada.php';?>


<!-- Start Contact Area -->
<section class="main-contact-area contact-info-area contact-info-three pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span>Contáctanos</span>
            <h2>Déjanos un mensaje para cualquier consulta</h2>
            <p>Estamos aquí para ayudarte con cualquier duda o información adicional que necesites sobre nuestros servicios y habitaciones.</p>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-wrap contact-pages">
                    <div class="contact-form contact-form-mb">
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control" required data-error="Por favor, ingresa tu nombre" placeholder="Tu Nombre">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" required data-error="Por favor, ingresa tu correo electrónico" placeholder="Tu Correo Electrónico">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="phone_number" id="phone_number" required data-error="Por favor, ingresa tu número de teléfono" class="form-control" placeholder="Tu Teléfono">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Por favor, ingresa el asunto" placeholder="Asunto">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control textarea-hight" id="message" cols="30" rows="4" required data-error="Escribe tu mensaje" placeholder="Tu Mensaje"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn btn-two">
                                        Enviar Mensaje
                                        <i class="flaticon-right"></i>
                                    </button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="single-contact-info">
                            <i class="bx bx-envelope"></i>
                            <h3>Envíanos un correo:</h3>
                            <a href="mailto:contacto@hotelsanjuan.com">contacto@hotelsanjuan.com</a>
                            <a href="mailto:reservas@hotelsanjuan.com">reservas@hotelsanjuan.com</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="single-contact-info">
                            <i class="bx bx-phone-call"></i>
                            <h3>Llámanos:</h3>
                            <a href="tel:+5776471234">Tel. +57 7 6471234</a>
                            <a href="tel:+573004567890">Cel. +57 300 456 7890</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="single-contact-info">
                            <i class="bx bx-location-plus"></i>
                            <h3>Ubicación:</h3>
                            <a href="#">Calle 20 #25-30, Girón, Santander, Colombia</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="single-contact-info">
                            <i class="bx bx-phone-call"></i>
                            <h3>Llámanos:</h3>
                            <a href="tel:+5776471234">Tel. +57 7 6471234</a>
                            <a href="tel:+573004567890">Cel. +57 300 456 7890</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Area -->

<!-- Start Map Area -->
<div class="map-area">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3968.871717262703!2d-73.173134!3d7.068717!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e683f2de6370177%3A0x5d13b4389150fe63!2sHotel%20San%20Juan%20Internacional!5e0!3m2!1ses!2sco!4v1698204705142!5m2!1ses!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<!-- End Map Area -->

			

<?php  include_once 'views/template/footer-principal.php'; ?>

</body>

</html>
