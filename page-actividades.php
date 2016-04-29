<?php
    /*
    Template Name: Actividades
    */
?>

<?php get_header(); ?>
	<div id="main" class="clearfix">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div id="foto-encabezado" class="absolute">
				<?php 
					$image = get_field('_cabecera');
					$size = 'encabezado'; 
					if( $image ) {
						echo wp_get_attachment_image( $image, $size );
					}
				?>
	    	</div>
			<h2 class="titulo-seccion center relative"><span><? the_title();?></span></h2>

			<div class="container extrapro">
				<?php if( get_field('_subtitulo_bloque_1') ): ?>
                    <?
                        $subtitle1 = get_field('_subtitulo_bloque_1');
                        $text1 = get_field('_texto_introduccion_1');
                    ?>
                    <div class="taller">
                    	<h3 class="upper"><?php echo $subtitle1; ?></h3>
						<br>
						<div class="left t-lato">
							<?php echo $text1; ?>
						</div>
						<br>
                    </div>
                <?php endif; wp_reset_postdata(); ?>			

				<div class="row cards-talleres">
					<div class="col-sm-4 caluga-taller shadow">
						<div class="col-sm-5 col-xs-12 foto-taller">
							<img class="img-responsive" src="img/foto-taller.jpg">
						</div>

						<div class="col-sm-7 col-xs-12 info-taller t-lato">
							<h4 class="t-exo">Título de Taller</h4>
							<h5 class="t-exo">Profesor del Taller</h5>
							<p>Lunes, Miercoles y Viernes 16:30 hrs</p>
							<p>Lugar: Gimnasio Colegio</p>
							<div class="row">
								<a class="center upper btn-default btn-block btn-lg t-exo" href="#">Más Información</a>
							</div>
						</div>
					</div>

					<div class="col-sm-4 caluga-taller shadow">
						<div class="col-sm-5 col-xs-12 foto-taller">
							<img class="img-responsive" src="img/foto-taller.jpg">
						</div>

						<div class="col-sm-7 col-xs-12 info-taller t-lato">
							<h4 class="t-exo">Título de Taller</h4>
							<h5 class="t-exo">Profesor del Taller</h5>
							<p>Lunes, Miercoles y Viernes 16:30 hrs</p>
							<p>Lugar: Gimnasio Colegio</p>
							<div class="row">
								<a class="center upper btn-default btn-block btn-lg t-exo" href="#">Más Información</a>
							</div>
						</div>
					</div>

					<div class="col-sm-4 caluga-taller shadow">
						<div class="col-sm-5 col-xs-12 foto-taller">
									<img class="img-responsive" src="img/foto-taller.jpg">
						</div>

						<div class="col-sm-7 col-xs-12 info-taller t-lato">
							<h4 class="t-exo">Título de Taller</h4>
							<h5 class="t-exo">Profesor del Taller</h5>
							<p>Lunes, Miercoles y Viernes 16:30 hrs</p>
							<p>Lugar: Gimnasio Colegio</p>
							<div class="row">
								<a class="center upper btn-default btn-block btn-lg t-exo" href="#">Más Información</a>
							</div>
						</div>
					</div>

				</div>

				<?php if( get_field('_subtitulo_bloque_2') ): ?>
                    <?
                        $subtitle1 = get_field('_subtitulo_bloque_2');
                        $text1 = get_field('_texto_introduccion_2');
                    ?>
                    <div class="taller">
                    	<h3 class="upper"><?php echo $subtitle1; ?></h3>
						<br>
						<div class="left t-lato">
							<?php echo $text1; ?>
						</div>
						<br>
                    </div>
                <?php endif; wp_reset_postdata(); ?>	

				<nav id="nav-ciclos" class="relative" role="navigation">

						<ul class="nav nav-pills">
					  		<li role="presentation" class="active"><a href="#">TODAS</a></li>
					  		<li role="presentation"><a href="#">Deportivas</a></li>
					  		<li role="presentation"><a href="#">Artisticas</a></li>
					  		<li role="presentation"><a href="#">Infent School</a></li>
					  		<li role="presentation"><a href="#">Elementary School</a></li>
					  		<li role="presentation"><a href="#">High School</a></li>
						</ul>

						<div class="navbar-header">

							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#ciclos-nav">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>

							<a class="navbar-brand hidden show-xs" href="#">Ciclos</a>

						</div>			 
				</nav>

				<br>

				<div class="row cards-talleres">

						<div class="col-sm-4 caluga-taller shadow">
							<div class="col-sm-5 col-xs-12 foto-taller">
									<img class="img-responsive" src="img/foto-taller.jpg">
							</div>

							<div class="col-sm-7 col-xs-12 info-taller t-lato">
								<h4 class="t-exo">Título de Taller</h4>
								<h5 class="t-exo">Profesor del Taller</h5>
								<p>Lunes, Miercoles y Viernes 16:30 hrs</p>
								<p>Lugar: Gimnasio Colegio</p>
								<div class="row">
									<a class="center upper btn-default btn-block btn-lg t-exo" href="#">Más Información</a>
								</div>
							</div>
						</div>

						<div class="col-sm-4 caluga-taller shadow">
							<div class="col-sm-5 col-xs-12 foto-taller">
									<img class="img-responsive" src="img/foto-taller.jpg">
							</div>

							<div class="col-sm-7 col-xs-12 info-taller t-lato">
								<h4 class="t-exo">Título de Taller</h4>
								<h5 class="t-exo">Profesor del Taller</h5>
								<p>Lunes, Miercoles y Viernes 16:30 hrs</p>
								<p>Lugar: Gimnasio Colegio</p>
								<div class="row">
									<a class="center upper btn-default btn-block btn-lg t-exo" href="#">Más Información</a>
								</div>
							</div>
						</div>

						<div class="col-sm-4 caluga-taller shadow">
							<div class="col-sm-5 col-xs-12 foto-taller">
									<img class="img-responsive" src="img/foto-taller.jpg">
							</div>

							<div class="col-sm-7 col-xs-12 info-taller t-lato">
								<h4 class="t-exo">Título de Taller</h4>
								<h5 class="t-exo">Profesor del Taller</h5>
								<p>Lunes, Miercoles y Viernes 16:30 hrs</p>
								<p>Lugar: Gimnasio Colegio</p>
								<div class="row">
									<a class="center upper btn-default btn-block btn-lg t-exo" href="#">Más Información</a>
								</div>
							</div>
						</div>

						<div class="col-sm-4 caluga-taller shadow">
							<div class="col-sm-5 col-xs-12 foto-taller">
									<img class="img-responsive" src="img/foto-taller.jpg">
							</div>

							<div class="col-sm-7 col-xs-12 info-taller t-lato">
								<h4 class="t-exo">Título de Taller</h4>
								<h5 class="t-exo">Profesor del Taller</h5>
								<p>Lunes, Miercoles y Viernes 16:30 hrs</p>
								<p>Lugar: Gimnasio Colegio</p>
								<div class="row">
									<a class="center upper btn-default btn-block btn-lg t-exo" href="#">Más Información</a>
								</div>
							</div>
						</div>

						<div class="col-sm-4 caluga-taller shadow">
							<div class="col-sm-5 col-xs-12 foto-taller">
									<img class="img-responsive" src="img/foto-taller.jpg">
							</div>

							<div class="col-sm-7 col-xs-12 info-taller t-lato">
								<h4 class="t-exo">Título de Taller</h4>
								<h5 class="t-exo">Profesor del Taller</h5>
								<p>Lunes, Miercoles y Viernes 16:30 hrs</p>
								<p>Lugar: Gimnasio Colegio</p>
								<div class="row">
									<a class="center upper btn-default btn-block btn-lg t-exo" href="#">Más Información</a>
								</div>
							</div>
						</div>
				</div>
				
			</div>
		<?php endwhile; else: ?>
            <div class="col-xs-12">
                <p class="textos">Lo sentimos, el contenido que buscas no se encuentra disponible.</p>
            </div>
        <?php endif; ?>
	</div>
	<!--/main-->

<?php get_footer(); ?>