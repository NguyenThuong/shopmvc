<?php
//load model

//form submit
if (!empty($_POST)) {
	foreach ($_POST['number'] as $pid => $number) {
		cart_update($pid, $number);
	}
	header('location:gio-hang.html');
}

//data
$title = 'Giỏ hàng';
$cart = cart_list();

//load view
require('frontend/views/cart/index.php');