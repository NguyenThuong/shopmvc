<?php
//load model

//data
$pid = intval($_GET['pid']);
$product = get_a_record('products', $pid);

if (!$product) {
	show_404();
}

$title = $product['name'];
$categories = get_all('categories', array(
	'select' => 'id, parent_id, name',
	'order_by' => 'parent_id ASC, position ASC'
));

//load view
require('frontend/views/product/view.php');