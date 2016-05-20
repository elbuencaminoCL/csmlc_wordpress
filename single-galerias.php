<?php get_header(); ?>	
	<div id="main" class="clearfix">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?
				$gal = get_page_by_path('nuestro-colegio/galeria-multimedia');
			?>
			<div id="foto-encabezado" class="absolute">
				<?php 
					$image = get_field('_cabecera', $gal);
					$size = 'encabezado'; 
					if($image) {
						echo wp_get_attachment_image( $image, $size );
					}
				?>
		    </div>
			<h2 class="titulo-seccion center relative"><span><? echo get_the_title($gal);?></span></h2>

			<div class="container relative galeria-detalle">
				<div class="row">
					<div class="col-md-9 col-xs-12">
						<h1 class="upper"><? the_title();?></h1>
						<div class="col-lg-12">
							<div class="row">
								<div class="col-sm-3 datos-ficha-galeria"><span class="glyphicon glyphicon-calendar"></span><? echo get_the_date();?></div>
								<div class="col-sm-3 upper datos-ficha-galeria">
									<?
										$terms = get_the_terms( $post->ID, 'galerias-multimedia' );
										if($terms){
											foreach($terms as $term){
									            $term = array_shift( $terms );
									            echo '| '.$term->name;
									        }
										}
									?>
								</div>
							</div>
						</div>

						<? the_content();?>

						<div class="clearfix int-galerias">
							<? echo get_detail_images();?>
						</div>
						<div class="col-sm-5">
							<div class="row">
								<a class="btn-primary btn-lg btn-block btn-azul" href="<?php bloginfo('wpurl'); ?>/nuestro-colegio/galeria-multimedia/"><span class="glyphicon glyphicon-menu-left"></span>  Volver a Galería Multimedia</a>
							</div>
						</div>
					</div>

					<div class="col-sm-3 hidden-xs car-noticia">
						<h3 class="h3-aside upper text-center">Relacionados</h3>
						<? include_once('modulos/related-gal.php');?>

						<div id="sidebar-bulletin" class="col-sm-12 burbuja-alerta-aside">
							<? echo do_shortcode('[contact-form-7 id="987" title="Suscribirse side"]');?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/main-->
		<?php endwhile; else: ?>
            <div class="col-xs-12">
                <p class="textos">Lo sentimos, el contenido que buscas no se encuentra disponible.</p>
            </div>
        <?php endif; ?>
	</div>
	<!--/main-->
<?php get_footer(); ?>