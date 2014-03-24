<?php
//load model (nếu cần)

//data
$title = 'Thế giới di động';
$categories = get_all('categories', array(
	'select' => 'id, parent_id, name',
	'order_by' => 'parent_id ASC, position ASC'
));

//phân trang
if(isset($_GET['page'])) $page = intval($_GET['page']); 
        else $page = 1;
        
$page = ($page>0) ? $page : 1;
$limit = 3;
$offset = ($page - 1) * $limit;

$options = array(
    'limit' => $limit,
    'offset' => $offset,
    'order_by' => 'id DESC'
);

$url = 'san-pham.html';
$total_rows = get_total('products', $options);
$total = ceil($total_rows/$limit);

//sản phẩm & phân trang
$products = get_all('products', $options);
$pagination = pagination($url, $page, $total, '?');

//load view
require('frontend/views/product/index.php');