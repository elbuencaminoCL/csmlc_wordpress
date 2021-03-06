<?php
    /*
    Template Name: Galerías
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

			<div class="container relative galeria-multimedia">
				<div class="center bajada-galeria">
					<img src="<?php bloginfo('template_directory'); ?>/img/iconos/ico-galeria.svg"><br>
					<?
						$main_excerpt= apply_filters('the_excerpt', get_post_field('post_excerpt', $post->ID));
						if($main_excerpt){
							echo '<h2>'.$main_excerpt.'</h2>';
						}
					?>
				</div>
				
				<div id="cont-talleres" class="grid clearfix main-gal">
					<nav id="nav-ciclos" class="relative" role="navigation">
						<ul class="nav nav-pills">
							<li role="presentation" class="filter" data-filter="all">TODAS</li>
						  	<? echo 
						  		get_custom_terms('galerias-multimedia',$args);
							  ?>
						</ul>

						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-ciclos">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand hidden show-xs" href="<?php bloginfo('wpurl'); ?>/ciclos/">Ciclos</a>
						</div>			 
					</nav>

					<div class="row">
						<div id="cont-galerias">
							<?php 
		                        $galerias = array (
					                'post_type' => 'galerias',
					                'posts_per_page' => -1
					            );
					            $gal = new WP_Query($galerias);
		                        if ( $gal->have_posts() ) {
		                            while ( $gal->have_posts() ) : $gal->the_post();
		                            $terms = get_the_terms($post->ID, 'galerias-multimedia');
		                    ?>
		                    	<div class="col-md-4 col-sm-6 col-xs-12 caluga-galeria mix <? foreach($terms as $term){ echo $term->slug.' ';} ?>">
									<div class="block contenedor-album">
										<div class="img-album">
											<?
												if(has_post_thumbnail()){
		                                            echo get_the_post_thumbnail($post->ID, 'gal', array('class' => 'img-responsive'));
		                                        } else {
		                                            echo '<img src="'.get_bloginfo('template_directory').'/img/default-news.jpg" class="img-responsive" alt="Colegio Santa María de Lo Cañas" />';
		                                        }
											?>
										</div>
										<h4 class="desc-galeria upper"><? the_title($gal->ID);?></h4>
										<div class="mascara-info text-center">
											<div class="ico-album"><img src="<?php bloginfo('template_directory'); ?>/img/iconos/ico-foto.svg"></div>
											<p><a href="<? the_permalink($gal->ID);?>">Ver Galería</a></p>
											<h4 class="upper"><? the_title($gal->ID);?></h4>
											<p><? echo get_the_date();?></p>
										</div>
									</div>
								</div>
		                    <?
		                            endwhile;
		                      	}
		                    ?>
		                    <div class="col-sm-12 center text-center">
								<div class="btn-cargar-abajo">
									<a href="javascript:void(0)"><span class="glyphicon glyphicon-menu-down"></span></a>
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
	<!--/main-->

<?php get_footer(); ?>