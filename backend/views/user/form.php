<div class="panel panel-default">
    <div class="panel-heading"><i class="glyphicon glyphicon-th-list"></i> Thông tin cá nhân</div>
    <div class="panel-body">
        <form id="user-form" class="form-horizontal" method="post" action="admin.php?controller=user&action=info" enctype="multipart/form-data" role="form">
            <input name="id" type="hidden" value="<?php echo $user ? $user['id'] : '0'; ?>"/>
            <div class="form-group">
                <label for="email" class="col-sm-3 control-label">Email</label>
                <div class="col-sm-9">
                    <input name="email" type="email" value="<?php echo $user ? $user['email'] : ''; ?>" class="form-control" id="email" placeholder="Email" required=""/>
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-3 control-label">Mật khẩu</label>
                <div class="col-sm-9">
                    <input name="password" type="password" value="" class="form-control" id="password" placeholder="Mật khẩu mới"/>
                </div>
            </div>
            <div class="form-group">
                <label for="name" class="col-sm-3 control-label">Họ và tên</label>
                <div class="col-sm-9">
                    <input name="name" type="text" value="<?php echo $user ? $user['name'] : ''; ?>" class="form-control" id="name" placeholder="Họ và tên" required=""/>
                </div>
            </div>
            <div class="form-group">
                <label for="address" class="col-sm-3 control-label">Địa chỉ</label>
                <div class="col-sm-9">
                    <input name="address" type="text" value="<?php echo $user ? $user['address'] : ''; ?>" class="form-control" id="address" placeholder="Địa chỉ"/>
                </div>
            </div>
            <div class="form-group">
                <label for="phone" class="col-sm-3 control-label">Di động</label>
                <div class="col-sm-9">
                    <input name="phone" type="text" value="<?php echo $user ? $user['phone'] : ''; ?>" class="form-control" id="phone" placeholder="Số di động" pattern="[0-9]{10,11}"/>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" class="btn btn-primary"><?php echo $user ? 'Cập nhật' : 'Thêm mới' ;?></button>
                    <a class="btn btn-warning" href="admin.php">Trở về</a>
                </div>
            </div>
        </form>
    </div>
</div>