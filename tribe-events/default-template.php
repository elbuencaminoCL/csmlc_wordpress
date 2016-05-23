<?php get_header(); ?>

	<!--main-->
	<div id="main" class="clearfix">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?
				$cal = get_page_by_path('calendario-de-actividades');
			?>
			<div id="foto-encabezado" class="absolute">
				<?php 
					$image = get_field('_cabecera', $cal);
					$size = 'encabezado'; 
					if($image) {
						echo wp_get_attachment_image( $image, $size );
					}
				?>
		    </div>
			<h2 class="titulo-seccion center relative"><span><? echo get_the_title($cal);?></span></h2>

			<div id="proyecto-educativo" class="container relative">
				<div class="row">
					<div class="alert alert-warning alert-dismissible burbuja-alerta" role="alert">
						<? echo do_shortcode('[contact-form-7 id="986" title="Suscribirse"]');?>
						<div class="col-sm-1 col-xs-12">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><img src="<? bloginfo('template_directory');?>/img/iconos/cerrar.svg"></span></button>
						</div>
					</div>	
				</div>	
			</div>

			<div class="agenda-bt">			
				<div class="container">
					<div class="col-md-6 col-xs-12">
						<div class="calendario shadow">
							<div class="mes-actual">
								<div id="tribe-events-pg-template">
									<?php tribe_get_view(); ?>
								</div>
							</div>
								
							<h4 class="mayus">Eventos de hoy</h4>

							<div class="event-block">
								<h2>
									<img class="img-ico" src="img/iconos/ico-hora.svg">12:00 Hrs.
								</h2>
								<h3>Titulo evento</h3>
								<p>Lorem ipsum dolor sit amet, sed an postea invenire, tale voluptatum vel no.</p>
								<h4>
									<img src="img/iconos/ico-lugar.svg"> Lugar evento
								</h4>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6 col-xs-12 block-rojo shadow">						
							<h4>Próximos eventos</h4>
							<?
								global $post;
								 
								$events = tribe_get_events( array(
								    'posts_per_page' => 5,
								    'start_date' => current_time( 'Y-m-d' ),
								) );
								 
								foreach ( $events as $post ) {
								    setup_postdata( $post );
								 	echo '<a href="'.get_the_permalink().'" class="clearfix btn-block evento">';
								 		echo '<div class="col-md-3 col-xs-3 fecha">';
								 			echo '<h4>'.tribe_get_start_date(null, false, 'M').'</h4>';
											echo '<h2>'.tribe_get_start_date(null, false, 'j').'</h2>';
										echo '</div>';
										echo '<div class="col-md-9 col-xs-9 event-desc">';
									    	echo '<h4>'.get_the_title().'</h4>';
									    	echo '<div class="col-md-8 col-xs-6">';
												echo '<div class="row">';
													echo '<img src="'.get_bloginfo('template_directory').'/img/iconos/ico-lugar.svg"> '.tribe_get_venue();
												echo '</div>';
											echo '</div>';	
											echo '<div class="col-md-4">';
												echo '<div class="row">';
													echo '<img src="'.get_bloginfo('template_directory').'/img/iconos/ico-hora.svg"> '.tribe_get_start_date( null, false, 'H:i' );
												echo '</div>';
											echo '</div>';
									    echo '</div>';
									echo '</a>';
								}
							?>
							<div class="centrar">
								<a href="" class="btn-uno btn-inline mayus">Cargar más eventos</a>
							</div>

							<?php if( have_rows('_descargar') ): ?>
								<div class="centrar">
									<?php while( have_rows('_descargar') ): the_row(); 
				                        $titulo = get_sub_field('_titulo_archivo');
				                        $link = get_sub_field('_enlace_archivo');
				                    ?>
				                        <a class="btn-seis btn-inline" href="<?php echo $link; ?>" target="_blank">Descargar Archivo</a>
					                   <?php endwhile;?>
					               </div>
					        <?php endif; wp_reset_postdata(); ?>
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

<?php get_footer();?>