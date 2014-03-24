<div class="product-detail thumbnail clearfix">
    <img src="public/upload/product/<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" class="col-sm-4"/>
    
    <div class="col-sm-8">
        <h3><?php echo $product['name']; ?></h3>
        <p><?php echo $product['summary']; ?></p>
        <p><?php echo number_format($product['price'],0,',','.'); ?> VNĐ</p>
        <p><a href="them-gio-hang.html?pid=<?php echo $product['id']; ?>" class="btn btn-primary" role="button">Đặt mua</a></p>
    </div>
</div>