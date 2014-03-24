<?php require('frontend/views/common/header.php'); ?>

<body>

    <?php require('frontend/views/common/navbar.php'); ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-4 col-xs-12 pull-right" id="sidebar" role="navigation">
                <?php require('frontend/views/common/sidebar.php'); ?>
            </div>
            <div class="col-lg-9 col-sm-8 col-xs-12 pull-left">
                <!-- BEGIN CONTENT -->
                <?php require('frontend/views/product/list.php'); ?>
                <!-- END CONTENT -->
            </div><!--/span-->            
        </div><!--/row-->
    </div><!--/.container-->

    <script type="text/javascript" src="public/js/jquery-1.10.2.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="public/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebar .panel-heading').click(function () {
                $('#sidebar .list-group').toggleClass('hidden-xs');
                $('#sidebar .panel-heading b').toggleClass('glyphicon-plus-sign').toggleClass('glyphicon-minus-sign');
            });
            even_height();
        });        
        $(window).resize(function() {
            even_height();
        });
        function even_height() {
            var height = 0;
            var images = $('.thumbnail img');
            $.each(images, function(i, image) {
                if ($(image).height() > height) {
                    height = $(image).height();
                }
            });
            $('.product-list .thumbnail > a').height(height);
        }
    </script>
</body>
</html>