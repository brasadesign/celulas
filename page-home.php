<?php

/* 
Template Name: Home
*/

get_header(); ?>


	<div class="slider-home">
	<?php if(function_exists("insert_post_highlights")) insert_post_highlights(); ?>
	</div>
	
	<div class="etiqueta-slider">O que Fazemos</div>
	
	<div class="mapa-home">
		<div class="fluid-wrapper">
		<iframe src="http://gator3131.hostgator.com/~luwkas/isabelsouzalima.com/#lat=-23.51688734846483&lng=-46.09135739843748&zoom=9" width="980" height="300"></iframe>
		</div>
	</div>

	<div class="etiqueta-mapa">Onde Fazemos</div>
	
	<div class="conteudo-home">
		
		<div class="inferior-home">


			<div class="agenda-home">
					<a class="query-agenda" href="<?php echo home_url( '/blog/agenda' ); ?>"><h3 class="title-query-link">Agenda</h3></a>	
					<?php 
					//Adiciona o Loop CPT Agenda
					get_template_part( 'loop', 'agenda' );
					?>
			</div>
			
			<div class="page-destaque-home">
				<?php 
                /* Pega a p�gina selecionada para o box */
				$box01 = get_option ('mo_box01');
				?>				

				<?php query_posts('pagename='.$box01.'&showposts=1'); if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<a  class="query-agenda" href="<?php the_permalink(); ?>"><h3 class="title-query-link"><?php the_title(); ?></h3></a>
								<div class="thumb-destaque">
									<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('destaqueimg'); ?></a>
								</div><!-- .thumb-destaque -->
					<?php the_excerpt(); ?>
					<a class="veja" href="<?php the_permalink(); ?>">Leia mais &gt;&gt;</a>
					<?php endwhile; endif; wp_reset_query(); ?>
			</div>
			
			<div class="sidebar-home">
					<?php do_action( 'before_sidebar' ); ?>
					<?php  if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
					<?php endif; // end sidebar widget area ?>
			</div>
			
		</div><!-- .inferior-home -->	
		
	</div><!-- .conteudo-home -->
<?php get_footer(); ?>
