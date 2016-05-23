<?php
    /*
    Template Name: Admisión (formularios)
    */
?>

<?php get_header(); ?>
	<div id="main" class="clearfix">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?
				$adm = get_page_by_path('admision');
			?>
			<div id="foto-encabezado" class="absolute">
				<?php 
					$image = get_field('_cabecera', $adm);
					$size = 'encabezado'; 
					if($image) {
						echo wp_get_attachment_image( $image, $size );
					}
				?>
		    </div>
			<h2 class="titulo-seccion center relative"><span><? echo get_the_title($adm);?></span></h2>

			<div class="container relative">
				<div class="row">
					<div class="center">
						<h3 class="step-titulo">FORMULARIO POSTULACIÓN</h3>
					</div>

					<div class="clearfix">
						<div class="well clearfix">
							<div class="col-sm-8">
								Recuerda que si quieres realizar el proceso de <strong>FORMA PRESENCIAL, puedes descargar el formulario y presentarlo directamente en la secretaria del colegio.</strong>
							</div>
							<div class="col-sm-4">
								<a class="pull-right btn-primary" href="#">Descargar el Formulario <strong>AQUÍ</strong></a>
							</div>
						</div>
					</div>	

					<div class="pasos clearfix">
						<hr class="current-step">
							
						<div class="col-sm-3">
							<? if(is_page('formulario-de-postulacion')) { ?>
								<a class="block center active" href="#">
							<? } else { ?>
								<a class="block center" href="<?php bloginfo('url'); ?>/formulario-de-postulacion/">
							<? } ?>
								<h3>1</h3>
								<h4>DATOS PERSONALES DEL POSTULANTE</h4>
							</a>
						</div>
							
						<div class="col-sm-3">
							<a class="block center" href="#">
								<h3>2</h3>
								<h4>DATOS ACÁDEMICOS DEL POSTULANTE</h4>
							</a>
						</div>

						<div class="col-sm-3">
							<a class="block center" href="#">
								<h3>3</h3>
								<h4>DATOS DE LOS PADRES DEL POSTULANTE</h4>
							</a>
						</div>

						<div class="col-sm-3">
							<a class="block center" href="#">
								<h3>4</h3>
								<h4>DATOS DEL APODERADO</h4>
							</a>
						</div>										
					</div>

<? echo do_shortcode('[contact-form-7 id="1071" title="Postulación"]');?>

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