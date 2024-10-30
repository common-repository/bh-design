<?php 

function bh_login_logo() { 

    $options = get_option( 'bhdesign_settings' );

    if ( $options != '') { $bhdesign_company_name = $options['bhdesign_company_name']; } ?>

    <?php if ($bhdesign_company_name == "Bluehost"): ?>

        <style type="text/css">
                   

            #login h1 a {
                 background-image: url('<?php echo WP_PLUGIN_URL . '/bh-design'; ?>/images/bh-login-logo.png');
                 padding-bottom: 0px;
                 width: 100%;
                 background-size: 100%;
            }

        </style>

    <?php elseif($bhdesign_company_name == "Justhost"): ?>

        <style type="text/css">

            body {
                 background: #DADADA;
            }

            #login h1 a {
                 background-image: url('<?php echo WP_PLUGIN_URL . '/bh-design'; ?>/images/jh-login-logo.png');
                 padding-bottom: 0px;
                 width: 100%;
                 background-size: 85%;
            }


        </style>


    <?php elseif($bhdesign_company_name == "Hostmonster"): ?>

        <style type="text/css">

            .login {
                background: #525252;
            }

            #login h1 a {
                 background-image: url('<?php echo WP_PLUGIN_URL . '/bh-design'; ?>/images/hm-login-logo.png');
                 padding-bottom: 0px;
                 width: 100%;
                 background-size: 95%;
            } 

            input#wp-submit {
                background-color: #70a531;
                border: none!important;
                text-shadow: none;
                box-shadow: none;
                border-radius: 0;
                padding: 0 30px;
            }

            form#loginform {
                background: rgba(6, 6, 6, 0.21);
            }

            label {
                color: white!important;
            }

            p#nav a,
            p#backtoblog a {
                color: white!important;
            }

        </style>


    <?php endif; ?>


    

<?php } 

add_action( 'login_enqueue_scripts', 'bh_login_logo' ); ?>