<?php
    /*
    Template Name: Guías
    */
?>

<?php get_header(); ?>
	<!--main-->
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

			<div class="center upper descripcion-guia">
				<img src="<?php bloginfo('template_directory'); ?>/img/iconos/ico-guia.svg"><br>
				<?php
					global $post;
					if ( has_excerpt( $post->ID ) ) {
						$excerpt= apply_filters('the_excerpt', get_post_field('post_excerpt', $post->ID));
					  echo '<h2 class="upper">'.$excerpt.'</h2>';
					}
				?>
			</div>

			<div id="buscador-guias">
				<div class="container clearfix">
					<div class="row">
						<div class="col-md-4 col-sm-12 col-xs-12"><h2 class="upper text-right">Material disponible</h2></div>
						<div class="col-md-8 col-sm-12 col-xs-12">
							<? echo do_shortcode('[ULWPQSF id=1213 formtitle="0"]');?>
						</div>
					</div>
				</div>
			</div>

			<div class="container relative">
				<div class="panel-group" id="accordion-guias" role="tablist" aria-multiselectable="true">
					<div id="cont-results"></div>
				</div>
			</div>

			<div class="container relative contenedor-guias">
				<div class="panel panel-default no-border">
					<div class="panel-body center no-border">
						<img src="<?php bloginfo('template_directory'); ?>/img/iconos/ico-guia-busqueda.svg">
						<p>AÚN NO SE HA REALIZADO NINGUNA BÚSQUEDA<br>
						SELECCIONA UN CURSO PARA VER LAS GUÍAS DISPONIBLES</p>
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