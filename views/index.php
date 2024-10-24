<?php  include_once 'views/template/header-principal.php'; ?>

<!-- Start Ecorik Slider Area -->
<section class="eorik-slider-area">
	<div class="eorik-slider owl-carousel owl-theme">
		<?php foreach ($data['sliders'] as $slider) { ?>
		<div class="eorik-slider-item " style="background-image: url(<?php echo RUTA_PRINCIPAL . 'assets/img/sliders/' . $slider['foto']?>); ">
			<div class="d-table">
				<div class="d-table-cell">
					<div class="container">
						<div class="eorik-slider-text overflow-hidden one eorik-slider-text-one">
							<h1><?php echo  $slider ['titulo'];?></h1>
							<span><?php echo  $slider ['subtitulo'];?></span>
							<div class="slider-btn">
								<a class="default-btn" href="<?php echo  $slider ['url'];?>">
									Mas información
									<i class="flaticon-right"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php } ?>

	</div>
	<div class="white-shape">
		<img src=" <?php echo RUTA_PRINCIPAL . 'assets/principal'; ?>/img/home-one/slider/white-shape.png" alt="Image">
	</div>
	<div class="social-link">
		<ul>
			<li>
				<a href="#">
					<i class="bx bxl-facebook"></i>
				</a>
			</li>
			<li>
				<a href="#">
					<i class="bx bxl-twitter"></i>
				</a>
			</li>
			<li>
				<a href="#">
					<i class="bx bxl-linkedin"></i>
				</a>
			</li>
		</ul>
	</div>
</section>
<!-- End Ecorik Slider Area -->

<!-- Start Check Area -->
<div class="check-area mb-minus-70">
	<div class="container">
		<form class="check-form" id="formulario" action="<?php echo RUTA_PRINCIPAL . 'reserva/verify'; ?>">
			<div class="row align-items-center">
				<div class="col-lg-3 col-sm-6">
					<div class="check-content">
						<p>Fecha Llegada</p>
						<div class="form-group">
							<div class="input-group date" id="datetimepicker-1">
								<i class="flaticon-calendar"></i>
								<input type="text" class="form-control" id="f_llegada" name="f_llegada" value="<?php echo date('Y-m-d'); ?> ">
								<span class="input-group-addon">
									<i class="glyphicon glyphicon-th"></i>
								</span>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-sm-6">
					<div class="check-content">
						<p>Fecha Salida</p>
						<div class="form-group">
							<div class="input-group date" id="datetimepicker-2">
								<i class="flaticon-calendar"></i>
								<input type="text" class="form-control" id="f_salida" name="f_salida"  value="<?php echo date('Y-m-d'); ?>">
								<span class="input-group-addon">
									<i class="glyphicon glyphicon-th"></i>
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
				<div class="check-content">
				<div class="form-group">
						<label for="habitacion" class="form-label">Habitaciones</label>
						<select name="habitacion" class="select-auto" id="habitacion" style="width: 100%;" >
							<option value="">Seleccionar</option>
							<?php foreach ($data['habitaciones'] as $habitacion) { ?>
								
							<option value="<?php echo $habitacion['id']; ?>"><?php echo $habitacion['estilo']; ?></option>
							<?php } ?>
						</select>
					</div>
				</div>
					
					
				</div>
				<div class="col-lg-3">
					<div class="check-btn check-content mb-0">
						<button class="default-btn" type="submit">
							Comprobar 
							<i class="flaticon-right"></i>
						</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
<!-- End Check Section -->

<!-- Start Explore Area -->
<section class="explore-area pt-170 pb-100">
	<div class="container">
		<div class="section-title">
			<span>Explorar</span>
			<h2>Nos encanta brindarte placer</h2>
		</div>
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="explore-img">
					<img src=" <?php echo RUTA_PRINCIPAL . 'assets/principal'; ?>/img/explore-img.jpg" alt="Imagen">
				</div>
			</div>
			<div class="col-lg-6">
				<div class="explore-content ml-30">
					<h2>Todo el confort que quieras obtener, lo tenemos para ti</h2>
					<p>Nuestro objetivo es ofrecerte una experiencia de lujo y confort. Disfruta de servicios exclusivos que harán de tu estancia una experiencia inolvidable.</p>

					<p>Nos esforzamos por brindarte lo mejor en hospitalidad. Desde habitaciones cómodas hasta servicios personalizados, estamos aquí para hacer tu estadía lo más placentera posible.</p>
					<a href="about.html" class="default-btn">
						Explorar Más
						<i class="flaticon-right"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Fin del área de exploración -->

<!-- Fin del área de instalaciones -->
<section class="facilities-area pb-60">
	<div class="container">
		<div class="section-title">
			<span>Instalaciones</span>
			<h2>Ofreciendo lo mejor</h2>
		</div>
		<div class="row">
			<div class="col-lg-3 col-sm-6">
				<div class="single-facilities-wrap">
					<div class="single-facilities">
						<i class="facilities-icon flaticon-pickup"></i>
						<h3>Transporte y Traslados</h3>
						<p>Servicio de transporte disponible para tu comodidad.</p>
						<a href="service-details.html" class="icon-btn">
							<i class="flaticon-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="single-facilities-wrap">
					<div class="single-facilities">
						<i class="facilities-icon flaticon-coffee-cup"></i>
						<h3>Bebida de Bienvenida</h3>
						<p>Te recibimos con una bebida refrescante a tu llegada.</p>
						<a href="service-details.html" class="icon-btn">
							<i class="flaticon-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="single-facilities-wrap">
					<div class="single-facilities">
						<i class="facilities-icon flaticon-garage"></i>
						<h3>Estacionamiento</h3>
						<p>Amplio espacio de estacionamiento disponible.</p>
						<a href="service-details.html" class="icon-btn">
							<i class="flaticon-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="single-facilities-wrap">
					<div class="single-facilities">
						<i class="facilities-icon flaticon-water"></i>
						<h3>Agua Fría y Caliente</h3>
						<p>Disfruta de agua fría y caliente en todo momento.</p>
						<a href="service-details.html" class="icon-btn">
							<i class="flaticon-right"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Fin del área de instalaciones -->

<!-- Inicio del área increíble -->
<section class="incredible-area ptb-140 jarallax">
	<div class="container">
		<div class="incredible-content">
			<a href="https://www.youtube.com/watch?v=mJZCJg4AQwA" class="video-btn popup-youtube">
				<i class="flaticon-play-button"></i>
			</a>
			<h2><span>¡Increíble!</span> ¿Vienes hoy?</h2>
			<p>Ven y disfruta de una experiencia única y especial. Te ofrecemos una estadía llena de confort, lujo y un servicio excepcional que hará que tu visita sea inolvidable.</p>
			<a href="#" class="default-btn">
				Únete Hoy
				<i class="flaticon-right"></i>
			</a>
		</div>
	</div>
	<div class="white-shape">
		<img src=" <?php echo RUTA_PRINCIPAL . 'assets/principal'; ?>/img/shape/white-shape-top.png" alt="Imagen">
		<img src=" <?php echo RUTA_PRINCIPAL . 'assets/principal'; ?>/img/shape/white-shape-bottom.png" alt="Imagen">
	</div>
</section>
<!-- Fin del área increíble -->



<!-- Inicio Área Vista de la Ciudad -->
<section class="city-view-area ptb-100">
	<div class="container">
		<div class="city-wrap">
			<div class="single-city-item owl-carousel owl-theme">
				<div class="city-view-single-item">
					<div class="city-content">
						<span>Vista de la Ciudad</span>
						<h3>Una vista encantadora del centro de la ciudad</h3>
						<p>Disfruta de una panorámica espectacular que abarca los principales puntos de referencia de la ciudad. Un lugar ideal para relajarse y admirar la arquitectura y la vida urbana.</p>

						<p>La vista desde este punto incluye lugares icónicos y es un área perfecta para quienes buscan capturar la esencia del dinamismo de la ciudad. Un paseo que mezcla modernidad y tradición.</p>
					</div>
				</div>
				<div class="city-view-single-item">
					<div class="city-content">
						<span>Vista de la Ciudad</span>
						<h3>Una vista encantadora de la ciudad</h3>
						<p>Este lugar te permitirá experimentar la ciudad desde un ángulo único. Perfecto para turistas y locales que buscan una perspectiva distinta del entorno urbano.</p>

						<p>La vista ofrece una experiencia que une lo mejor del diseño arquitectónico y los paisajes urbanos, brindando un lugar de observación que no puedes perderte.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Fin Área Vista de la Ciudad -->

<!-- Inicio Área Exclusiva -->
<section class="exclusive-area pt-100 pb-70">
	<div class="container">
		<div class="section-title">
			<span>Ofertas Exclusivas</span>
			<h2>Puedes obtener una oferta exclusiva</h2>
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-6">
				<div class="exclusive-wrap">
					<div class="row">
						<div class="col-lg-6 pr-0">
							<div class="exclusive-img bg-1"></div>
						</div>
						<div class="col-lg-6 pl-0">
							<div class="exclusive-content">
								<span class="title">Hasta un 30% de Descuento</span>
								<h3>Natación para hombres</h3>
								<span class="review">
									4.5
									<a href="#">(432 Reseñas)</a>
								</span>
								<p>Disfruta de una experiencia de natación con instructores profesionales y equipo de última generación, con un descuento especial.</p>
								<ul>
									<li>
										<i class="bx bx-time"></i>
										Duración: 2 Horas
									</li>
									<li>
										<i class="bx bx-target-lock"></i>
										Mayores de 18 años
									</li>
								</ul>
								<a href="book-table.html" class="default-btn">
									Reserva en Línea
									<i class="flaticon-right"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="exclusive-wrap">
					<div class="row">
						<div class="col-lg-6 pr-0">
							<div class="exclusive-img bg-2"></div>
						</div>
						<div class="col-lg-6 pl-0">
							<div class="exclusive-content">
								<span class="title">Solo este mes</span>
								<h3>Paquete de desayuno por $5</h3>
								<span class="review">
									5.0
									<a href="#">(580 Reseñas)</a>
								</span>
								<p>Empieza tu día con un delicioso desayuno a un precio especial. Incluye platos frescos y saludables para empezar con energía.</p>
								<ul>
									<li>
										<i class="bx bx-time"></i>
										Duración: 2 Horas
									</li>
									<li>
										<i class="bx bx-target-lock"></i>
										Mayores de 18 años
									</li>
								</ul>
								<a href="book-table.html" class="default-btn">
									Reserva en Línea
									<i class="flaticon-right"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Fin Área Exclusiva -->


<!-- Inicio Área de Reservaciones -->
<section class="bokking-area pb-70">
    <div class="container">
        <div class="section-title">
            <span>Reservaciones</span>
            <h2>Beneficios de reservar directamente</h2>
        </div>

        <div class="row">
            <div class="booking-col-2">
                <div class="single-booking">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        <i class="book-icon flaticon-online-booking"></i>
                        <span class="booking-title">Sin Costo</span>
                        <h3>Sin tarifa de reserva</h3>
                    </a>

                    <div class="modal fade" id="staticBackdrop">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Sin tarifa de reserva</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                                </div>

                                <div class="modal-body">
                                    <p>Al reservar directamente con nosotros, no pagas ninguna tarifa adicional por tu reservación. Disfruta de todos los beneficios sin costos ocultos.</p>
                                </div>

                                <div class="modal-footer">
                                    <a href="book-table.html" class="default-btn">
                                        Reservar Ahora
                                        <i class="flaticon-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="booking-col-2">
                <div class="single-booking">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop-2">
                        <i class="book-icon flaticon-podium"></i>
                        <span class="booking-title">Garantía</span>
                        <h3>Mejor tarifa garantizada</h3>
                    </a>

                    <div class="modal fade" id="staticBackdrop-2">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Mejor tarifa garantizada</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                                </div>

                                <div class="modal-body">
                                    <p>Garantizamos que obtendrás la mejor tarifa posible al reservar directamente a través de nuestro sitio web.</p>
                                </div>

                                <div class="modal-footer">
                                    <a href="book-table.html" class="default-btn">
                                        Reservar Ahora
                                        <i class="flaticon-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="booking-col-2">
                <div class="single-booking">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop-3">
                        <i class="book-icon flaticon-airport"></i>
                        <span class="booking-title">Disponibilidad</span>
                        <h3>Reservaciones 24/7</h3>
                    </a>

                    <div class="modal fade" id="staticBackdrop-3">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Reservaciones 24/7</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                                </div>

                                <div class="modal-body">
                                    <p>Nuestras reservas están disponibles las 24 horas del día, los 7 días de la semana, para que puedas planificar tu estancia en cualquier momento.</p>
                                </div>

                                <div class="modal-footer">
                                    <a href="book-table.html" class="default-btn">
                                        Reservar Ahora
                                        <i class="flaticon-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="booking-col-2">
                <div class="single-booking">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop-4">
                        <i class="book-icon flaticon-slow"></i>
                        <span class="booking-title">Conexión Rápida</span>
                        <h3>Wi-Fi de alta velocidad</h3>
                    </a>

                    <div class="modal fade" id="staticBackdrop-4">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Wi-Fi de alta velocidad</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                                </div>

                                <div class="modal-body">
                                    <p>Disfruta de conexión Wi-Fi gratuita y de alta velocidad en todas nuestras instalaciones.</p>
                                </div>

                                <div class="modal-footer">
                                    <a href="book-table.html" class="default-btn">
                                        Reservar Ahora
                                        <i class="flaticon-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="booking-col-2">
                <div class="single-booking">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop-5">
                        <i class="book-icon flaticon-coffee-cup-1"></i>
                        <span class="booking-title">Desayuno Gratis</span>
                        <h3>Desayuno incluido</h3>
                    </a>

                    <div class="modal fade" id="staticBackdrop-5">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Desayuno incluido</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                                </div>

                                <div class="modal-body">
                                    <p>Disfruta de un delicioso desayuno gratuito durante tu estancia con nosotros.</p>
                                </div>

                                <div class="modal-footer">
                                    <a href="book-table.html" class="default-btn">
                                        Reservar Ahora
                                        <i class="flaticon-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Fin Área de Reservaciones -->

<!-- Inicio Área de Restaurantes -->
<section class="restaurants-area pb-100">
    <div class="container-fluid p-0">
        <div class="section-title">
            <span>Restaurantes</span>
            <h2>Las áreas que cubrimos en Ecorik</h2>
        </div>

        <div class="restaurants-wrap owl-carousel owl-theme">
            <div class="single-restaurants bg-1">
                <i class="restaurants-icon flaticon-coffee-cup"></i>
                <span>Restaurantes</span>
                <p>Descubre nuestros exclusivos restaurantes, donde disfrutarás de una experiencia gastronómica inolvidable.</p>
                <a href="#" class="default-btn">
                    Explorar Más
                    <i class="flaticon-right"></i>
                </a>
            </div>
            <div class="single-restaurants bg-2">
                <i class="restaurants-icon flaticon-swimming"></i>
                <span>Piscina</span>
                <p>Relájate en nuestra piscina, disponible para todos los huéspedes, y disfruta de un ambiente tranquilo.</p>
                <a href="#" class="default-btn">
                    Explorar Más
                    <i class="flaticon-right"></i>
                </a>
            </div>
            <div class="single-restaurants bg-3">
                <i class="restaurants-icon flaticon-speaker"></i>
                <span>Sala de Conferencias</span>
                <p>Nuestra sala de conferencias está equipada con tecnología moderna.</p>
                <a href="#" class="default-btn">
                    Explorar Más
                    <i class="flaticon-right"></i>
                </a>
            </div>
            <div class="single-restaurants bg-4">
                <i class="restaurants-icon flaticon-podium"></i>
                <span>Mejor Tarifa</span>
                <p>Ofrecemos tarifas competitivas para todos nuestros servicios, asegurando la mejor relación calidad-precio.</p>
                <a href="#" class="default-btn">
                    Explorar Más
                    <i class="flaticon-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Fin Área de Restaurantes -->

<!-- Inicio Área de Testimonios -->
<section class="testimonials-area pb-100">
    <div class="container">
        <div class="section-title">
            <span>Testimonios</span>
            <h2>Lo que nuestros clientes dicen</h2>
        </div>

        <div class="testimonials-wrap owl-carousel owl-theme">
            <div class="single-testimonials">
                <p>“La mejor experiencia en un hotel. Todo fue perfecto, desde la atención hasta las instalaciones. ¡Recomendado!”</p>
                <h3>Juan Pérez</h3>
                <span>Cliente</span>
            </div>
            <div class="single-testimonials">
                <p>“Increíble servicio, el personal es muy atento y las habitaciones están impecables. Definitivamente volveremos.”</p>
                <h3>María Gómez</h3>
                <span>Cliente</span>
            </div>
            <div class="single-testimonials">
                <p>“La piscina es maravillosa y la comida deliciosa. Una experiencia inolvidable para toda la familia.”</p>
                <h3>Carlos Martínez</h3>
                <span>Cliente</span>
            </div>
        </div>
    </div>
</section>
<!-- Fin Área de Testimonios -->


<!-- Fin Área de Noticias -->
<section class="news-area pb-60">
	<div class="container">
		<div class="section-title">
			<span>Nuestro Blog</span>
			<h2>Actualizaciones de noticias y artículos</h2>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="single-news">
					<div class="news-img">
						<a href="news-details.html">
							<img src=" <?php echo RUTA_PRINCIPAL . 'assets/principal'; ?>/img/news/1.jpg" alt="Imagen">
						</a>
						<div class="dates">
							<span>HOTEL</span>
						</div>
					</div>
					<div class="news-content-wrap">
						<ul>
							<li>
								<a href="#">
									<i class="flaticon-user"></i>
									Admin
								</a>
							</li>
							<li>
								<a href="#">
									<i class="flaticon-conversation"></i>
									Comentarios
								</a>
							</li>
						</ul>
						<a href="news-details.html">
							<h3>Celebrando una década de éxito en 2020</h3>
						</a>
						<p>Nuestro hotel celebra diez años de servicio, ofreciendo experiencias inolvidables a nuestros huéspedes.</p>
						<a class="read-more" href="news-details.html">
							Leer más
							<i class="flaticon-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-news">
					<div class="news-img">
						<a href="news-details.html">
							<img src=" <?php echo RUTA_PRINCIPAL . 'assets/principal'; ?>/img/news/2.jpg" alt="Imagen">
						</a>
						<div class="dates">
							<span>PRECIO</span>
						</div>
					</div>
					<div class="news-content-wrap">
						<ul>
							<li>
								<a href="#">
									<i class="flaticon-user"></i>
									Admin
								</a>
							</li>
							<li>
								<a href="#">
									<i class="flaticon-conversation"></i>
									Comentarios
								</a>
							</li>
						</ul>
						<a href="news-details.html">
							<h3>Un día perfecto para empresarios en el Hotel Ecorik</h3>
						</a>
						<p>Descubre cómo nuestros servicios especializados han convertido al Hotel Ecorik.</p>
						<a class="read-more" href="news-details.html">
							Leer más
							<i class="flaticon-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
				<div class="single-news">
					<div class="news-img">
						<a href="news-details.html">
							<img src=" <?php echo RUTA_PRINCIPAL . 'assets/principal'; ?>/img/news/1.jpg" alt="Imagen">
						</a>
						<div class="dates">
							<span>TIENDA</span>
						</div>
					</div>
					<div class="news-content-wrap">
						<ul>
							<li>
								<a href="#">
									<i class="flaticon-user"></i>
									Admin
								</a>
							</li>
							<li>
								<a href="#">
									<i class="flaticon-conversation"></i>
									Comentarios
								</a>
							</li>
						</ul>
						<a href="news-details.html">
							<h3>Celebrando diez años de servicio en 2019</h3>
						</a>
						<p>El año pasado marcó nuestro décimo aniversario.</p>
						<a class="read-more" href="news-details.html">
							Leer más
							<i class="flaticon-right"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Fin Área de Noticias -->


	<?php  echo include_once 'views/template/footer-principal.php' ;
	if (!empty($_GET['respuesta'])) { ?>
<script>
	alertaSW('TODOS LOS CAMPOS SON REQUERIDOS', 'warning');
</script>
	

<?php } ?>
	<script src="<?php echo RUTA_PRINCIPAL .  'assets/principal/js/pages/disponibilidad.js' ?>"></script>
	<script src="<?php echo RUTA_PRINCIPAL .  'assets/principal/js/pages/index.js' ?>"></script>



</body>

</html>