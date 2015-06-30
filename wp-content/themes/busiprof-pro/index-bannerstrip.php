<div class="inner_top_mn">
	<div class="container">
		<div class="row-fluid about_space">
			<h2 class="about_head pull-left"><?php the_title(); ?><br /><span><?php bloginfo('description');?></span></h2>
			<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
				<div class="search_box">
					<input type="text"name="s" placeholder=<?php _e( 'Search', 'busi_prof' ); ?> class="search_input" id="appendedInputButton">
					<input type="button" class="search_btn" value="">
				</div>
			</form>
		</div>
	</div>
</div>