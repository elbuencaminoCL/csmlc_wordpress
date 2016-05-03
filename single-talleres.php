<?php get_header(); ?>	
	<div id="main" class="clearfix">
		<?
			$extra = get_page_by_path('extra-programaticas');
		?>
		<div id="foto-encabezado" class="absolute">
			<?php 
				$image = get_field('_cabecera', $extra);
				$size = 'encabezado'; 
				if($image) {
					echo wp_get_attachment_image( $image, $size );
				}
			?>
	    </div>
		<h2 class="titulo-seccion center relative"><span><? echo get_the_title($extra);?></span></h2>
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="titulo-taller relative">
				<div class="container">
					<h1 class="upper t-exo"><? the_title();?></h1>
					<?php if( get_field('_profesor_a_cargo') ): ?>
				        <h3><?php the_field('_profesor_a_cargo'); ?></h3>
				    <?php endif; ?>
				</div>
			</div>

			<div class="container relative ficha-taller">
				<div class="row">
					<div class="col-sm-7 col-xs-12">
						<div class="row">
							<img class="img-responsive img-ficha-taller" src="img/1600.jpg">
						</div>
					</div>

					<div class="col-sm-5 col-xs-12">
						<? the_content();?>
					</div>

					<div class="col-sm-12 info-ficha-taller">
						<div class="row">
							<h3 class="t-exo">Horarios</h3>
							
							<div class="col-sm-12">
								<h4 class="upper">Elementary School</h4>

								<div class="col-sm-11 horario-taller">
									<p class="upper">Horario</p>
									<div class="col-sm-3 col-xs-12">
								
									Lunes, Miercoles y Viernes
									</div>
									<div class="col-sm-3 col-xs-12">
									16:30 a 20:00 Hrs.
									</div>
								</div>
							</div>
							
							<div class="col-sm-12">
								<h4 class="upper">High School</h4>

								<div class="col-sm-11 horario-taller">
									<p class="upper">Horario</p>
									<div class="col-sm-3 col-xs-12">
									
									Lunes, Miercoles y Viernes
									</div>
									<div class="col-sm-3 col-xs-12">
									16:30 a 20:00 Hrs.
									</div>
								</div>
							</div>

							<div class="col-sm-4">
								<div class="row">
									<a class="btn-primary btn-lg btn-block btn-azul" href="<?php bloginfo('template_directory'); ?>/extra-programaticas/"><span class="glyphicon glyphicon-menu-left"></span>Volver a Extra Programáticas</a>
								</div>
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
<?php get_footer(); ?>