<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">


	<a href="#" class="icon-search" aria-hidden="true">
		<i class="fa fa-search"></i>
	</a>

	<label class="search-field">
		<input type='text' class="input" placeholder="TYPE AND HIT ENTER..."  value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
	</label>
	<button class="search-submit screen-reader-text">
		<span class="icon-search" aria-hidden="true">
			<i class="fa fa-search"></i>
		</span>
		<?php echo esc_html( 'Search' ); ?>
	</button>



</form>
