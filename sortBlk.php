<?php

global $query_string;
parse_str($query_string, $args);	

$metaquery = array(
	'relation' => 'OR',
	'orderCatM' => array (
		'key'     => 'tovar_order',
		'compare' => 'EXIST',
		'type'    => 'NUMERIC',
	),
	
	'orderExist' => array (
		'key'     => 'tovar_order',
		'compare' => 'EXIST',
		'type'    => 'NUMERIC',
	),
	
	'priceM' => array (
		'key'     => 'as_product_price',
		'value' => '0',
		'compare' => '>',
		'type'    => 'NUMERIC',
	),
);

if ($_REQUEST["orderby"] === "price_asc" ){	
	$orderby = "priceM";  
	$order = "ASC";  
}

if ($_REQUEST["orderby"] === "price_desc" ){	
	$orderby = "priceM";  
	$order = "DESC";  
}

if ($_REQUEST["orderby"] === "order_abs" ){	
	$orderby = "title";  
	$order = "ASC";  
}


	$args['meta_query'] = $metaquery;
	$args['orderby'] = $orderby;
	$args['order'] = $order;	
	
	query_posts( $args );
?>