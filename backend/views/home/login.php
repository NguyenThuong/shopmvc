<?php require('backend/views/common/header.php'); ?>

<body id="login">

    <?php require('backend/views/common/navbar.php'); ?>

    <div class="container">
        <form method="post" action="admin.php?controller=home&action=login" class="form-signin" role="form">
            <div class="form-group">
            	<input name="email" type="email" class="form-control input-lg" placeholder="Email" required autofocus>
            </div>
            <div class="form-group">
            	<input name="password" type="password" class="form-control input-lg" placeholder="Password" required>
            </div>            
            <button class="btn btn-lg btn-primary btn-block" type="submit">Đăng nhập</button>
        </form>
    </div> <!-- /container -->
    
</body>
</html>