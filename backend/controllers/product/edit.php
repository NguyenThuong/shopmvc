<?php
//load model
require_once('backend/models/products.php');

//if form submit 
if (!empty($_POST)) {
	$name = escape($_POST['name']);

	$product = array(
		'id' => intval($_POST['id']),
		'category_id' => intval($_POST['category_id']),
		'name' => $name,
		'summary' => escape($_POST['summary']),
		'price' => intval(str_replace('.', '', $_POST['price']))
	);
	$pid = save('products', $product);

	//upload ảnh	
	$image_name = $pid.'-'.alias($name);
    $config = array(
    	'name' => $image_name,
        'upload_path'  => 'public/upload/product/',
        'allowed_exts' => 'jpg|jpeg|png|gif',
    );
    $image = upload('image', $config);
    
    //cập nhật ảnh mới
    if($image){
    	$product = array(
    		'id' => $pid,
    		'image' => $image
    	);
    	//resize ảnh
    	require('librarys/CImage.php');
    	$image = new CImage('public/upload/product/'.$image);
    	$image->resizeTo(720, 720);
    	$image->save();

    	save('products', $product);
    }
	
	//chuyển hướng
	header('location:admin.php?controller=product');
}

if (isset($_GET['pid'])) $pid = intval($_GET['pid']); else $pid=0;

//data
$title = ($pid==0) ? 'Thêm sản phẩm' : 'Sửa sản phẩm';
$user = $_SESSION['user'];
$product = get_a_record('products', $pid);

$categories = get_all('categories', array(
	'select'=>'id, parent_id, name',
	'order_by' => 'parent_id ASC, position ASC'
));

//load view
require('backend/views/product/edit.php');