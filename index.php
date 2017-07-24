<?php get_header() ?>


<div class="content">
    <div class="container">
        <div class="header">
            <?php wp_nav_menu(['theme_location'=>'header-menu']); ?>

        </div>
        <?php $user_info = get_userdata(1);
        echo 'Username: ' . $user_info->user_login . "\n";
        echo 'User roles: ' . implode(', ', $user_info->roles) . "\n";
        echo 'User ID: ' . $user_info->ID . "\n";
        ?>
    </div>
     <?php wp_login_form();  ?>
</div>



<?php get_footer() ?>