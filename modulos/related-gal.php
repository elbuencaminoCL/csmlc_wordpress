					<?php 
						$custom_taxterms = wp_get_object_terms( $post->ID, 'galerias-multimedia', array('fields' => 'ids') );
						$args = array(
							'post_type' => 'galerias',
							'post_status' => 'publish',
							'posts_per_page' => 1,
							'orderby' => 'rand',
							'tax_query' => array(
							    array(
							        'taxonomy' => 'galerias-multimedia',
							        'field' => 'id',
							        'terms' => $custom_taxterms
							    )
							),
							'post__not_in' => array ($post->ID),
						);
						$related_items = new WP_Query( $args );
						if ($related_items->have_posts()) :
						while ( $related_items->have_posts() ) : $related_items->the_post();
					?>
						<a href="btn-block" href="<?php the_permalink(); ?>">
							<? echo get_the_post_thumbnail($related_items->ID, 'news', array('class' => 'img-responsive')); ?>
							<h4 class="upper center desc-galeria"><?php the_title(); ?></h4>
						</a>
					<?php
						endwhile;
						endif;
						wp_reset_postdata();
					?>