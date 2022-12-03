<form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
	<input 
    id="search_form_input"
    type="search" 
    class="form-control" 
    placeholder="جستجوی کالا یا خدمات آی کلینیک" 
    value="<?php echo get_search_query() ?>" 
    name="s" 
    title="Search" />
</form>