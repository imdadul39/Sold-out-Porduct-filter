<?php
// Sold out Porduct filter 
function imdadwp_sort_by_stock($args)
{
   $args['orderby'] = 'meta_value';
   $args['order'] = 'ASC';
   $args['meta_key'] = '_stock_status';
   return $args;
}
add_filter('woocommerce_get_catalog_ordering_args', 'imdadwp_sort_by_stock', 9999);
