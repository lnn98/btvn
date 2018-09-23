<?php require 'define.php'; ?>
<?php require ADMIN_PATH.'partial/header.php'; ?>

<div class="page-container">
    <div class="left-content">
        <div class="mother-grid-inner">
            <?php require ADMIN_PATH.'partial/header-main.php'; ?>

            <?php
            if (isset($_GET['shoppy'])) {
                $page = $_GET['shoppy'].'.php';
                $page_path = ADMIN_PATH.'shoppy/'.$page;
                $check_file_path = file_exists($page_path);
                if ($check_file_path) {
                    require $page_path;
                } else {
                    require ADMIN_PATH.'shoppy/404.php';
                }
            } else {
                require ADMIN_PATH.'shoppy/404.php';
            }

            ?>

            <?php require ADMIN_PATH.'partial/copyright.php'; ?>
        </div>
    </div>
    <?php require ADMIN_PATH.'partial/sidebar.php'; ?>

    <div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->
<!-- mother grid end here-->
<?php require ADMIN_PATH.'partial/footer.php'; ?>
