<?php

/*

 *

 * Template: Header.php

 *

 */

?>

<!DOCTYPE html>

<!--BEGIN html-->

<html <?php language_attributes(); ?>>

    <!--BEGIN head-->

    <head>
	<!--Link Google Webmaster email wandaazhar@gmail.com-->
	<meta name="google-site-verification" content="FQeakj9MIEq96elIkJV1o76IfaZasz0ueGm6HdBDhfo" />
        <?php

        $evolve_page_ID = get_queried_object_id();

        $evolve_slider_position = evolve_get_option('evl_slider_position', 'below');



        $evolve_favicon = evolve_get_option('evl_favicon');

        if ($evolve_favicon) {

            ?>

            <!-- Favicon -->

            <!-- Firefox, Chrome, Safari, IE 11+ and Opera. -->

            <link href="<?php echo $evolve_favicon; ?>" rel="icon" type="image/x-icon" />

        <?php } ?>



        <!-- Meta Tags -->

        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <?php wp_head(); ?>



        <!--[if lt IE 9]>

        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/ie.css">

        <![endif]-->

    </head><!--END head-->



    <?php $evolve_header_type = evolve_get_option('evl_header_type', 'none'); ?>



    <!--BEGIN body-->

    <body <?php body_class(); ?>>

        <?php

        $evolve_custom_background = evolve_get_option('evl_custom_background', '1');

        if ($evolve_custom_background == "1") {

            ?>

            <div id="wrapper">

                <?php

            }

            ?>



            <div class="menu-back">

                <?php

                $evolve_current_post_slider_position = get_post_meta($evolve_page_ID, 'evolve_slider_position', true);

                $evolve_current_post_slider_position = empty($evolve_current_post_slider_position) ? 'default' : $evolve_current_post_slider_position;

                if ($evolve_current_post_slider_position == 'above' || ($evolve_current_post_slider_position == 'default' && $evolve_slider_position == 'above') || (is_home() && $evolve_slider_position == 'above')):

                    get_template_part('allslider');

                endif;

                ?>

                <div class="clearfix"></div>

            </div><!--/.menu-back-->



            <div id="top"></div>

            <marquee><i style="color: red; font-size: 11px;"><?php echo date ("d-M-Y"); ?> &nbsp; *Mohon Maaf, Selama Wabah Covid-19 Pendaftaran Rawat Jalan Tidak Bisa Melalui Online dan Sms*</i></marquee>
            <?php

            switch ($evolve_header_type) {

                case "none":

                    
                    get_template_part('assets/templates/header_v1');
                    
                    break;

                case "h1":

                    get_template_part('assets/templates/header_v2');

                    break;

            }

            ?> 
            
            <div class="menu-container">

                <?php

                $evolve_menu_background = evolve_get_option('evl_disable_menu_back', '1');

                $evolve_width_layout = evolve_get_option('evl_width_layout', 'fixed');

                if ($evolve_width_layout == "fluid" && $evolve_menu_background == "1") {

                    ?>

                    <div class="fluid-width">

                    <?php }

                    ?>

                    <div class="menu-back">

                        <?php

                        $evolve_current_post_slider_position = get_post_meta($evolve_page_ID, 'evolve_slider_position', true);

                        $evolve_current_post_slider_position = empty($evolve_current_post_slider_position) ? 'default' : $evolve_current_post_slider_position;

                        if ($evolve_current_post_slider_position == 'below' || ($evolve_current_post_slider_position == 'default' && $evolve_slider_position == 'below') || (is_home() && $evolve_slider_position == 'below')):

                            get_template_part('allslider');

                        endif;

                        ?>

                        <div style="clear:both;"></div> 



                        <?php

                        if ($evolve_width_layout == "fluid") {

                            ?>

                            <div class="container">

                                <?php

                            }



                            $evolve_header_widgets_placement = evolve_get_option('evl_header_widgets_placement', 'home');

                            $evolve_widget_this_page = get_post_meta($evolve_page_ID, 'evolve_widget_page', true);

                            if (((is_home() || is_front_page()) && $evolve_header_widgets_placement == "home") || (is_single() && $evolve_header_widgets_placement == "single") || (is_page() && $evolve_header_widgets_placement == "page") || ($evolve_header_widgets_placement == "all") || ($evolve_widget_this_page == "yes" && $evolve_header_widgets_placement == "custom")) {

                                $evolve_widgets_header = evolve_get_option('evl_widgets_header', 'disable');

                                // if Header widgets exist

                                if (($evolve_widgets_header == "") || ($evolve_widgets_header == "disable")) {

                                    

                                } else {

                                    $evolve_header_css = '';

                                    if ($evolve_widgets_header == "one") {

                                        $evolve_header_css = 'widget-one-column col-sm-12';

                                    }

                                    if ($evolve_widgets_header == "two") {

                                        $evolve_header_css = 'col-sm-6 col-md-6';

                                    }

                                    if ($evolve_widgets_header == "three") {

                                        $evolve_header_css = 'col-sm-6 col-md-4';

                                    }

                                    if ($evolve_widgets_header == "four") {

                                        $evolve_header_css = 'col-sm-6 col-md-3';

                                    }

                                    ?>

                                    <div class="container">

                                        <div class="header-widgets">

                                            <div class="widgets-back-inside">

                                                <div class="<?php echo $evolve_header_css; ?>">

                                                    <?php

                                                    if (!dynamic_sidebar('header-1')) :

                                                    endif;

                                                    ?>

                                                </div>

                                                <div class="<?php echo $evolve_header_css; ?>">

                                                    <?php

                                                    if (!dynamic_sidebar('header-2')) :

                                                    endif;

                                                    ?>

                                                </div>

                                                <div class="<?php echo $evolve_header_css; ?>">

                                                    <?php

                                                    if (!dynamic_sidebar('header-3')) :

                                                    endif;

                                                    ?>

                                                </div>

                                                <div class="<?php echo $evolve_header_css; ?>">

                                                    <?php

                                                    if (!dynamic_sidebar('header-4')) :

                                                    endif;

                                                    ?>

                                                </div>

                                            </div>

                                        </div>

                                    </div><!-- /.container -->

                                    <?php

                                }

                            } else {

                                

                            }

                            ?>

                            <?php

                            if ($evolve_width_layout == "fluid") {

                                ?>

                            </div><!-- /.container -->

                        <?php } ?>                    

                    </div><!--/.menu-back-->

                    <?php

                    if ($evolve_width_layout == "fluid") {

                        ?>

                    </div><!-- /.fluid-width -->

                <?php } ?>



                <!--BEGIN .content-->

                <div class="content <?php semantic_body(); ?>">
                <!-- Design Corona -->
                    <div class="corona">
                        <h3 align="center" style="color: red;"><span style="font-weight: bold; font-size: 34px;">LINDUNGI</span> DIRI ANDA DARI VIRUS <span style="font-weight: bold; font-size: 34px;">CORONA!!!</span></h3>
                        <div class="boxcorona">
                            <div class="contentcorona">
                            <a href="http://kutipanbuku.com/">
                                <img src="https://rsu.tangerangselatankota.go.id/wp-content/uploads/covid-19/home.png" alt="">
                                <p>STAY AT HOME!!! </p>
                                <p>Jika memang tidak terlalu penting</p>
                            </div>
                            </a>
                        </div>
                        <div class="boxcorona">
                            <a href="http://kutipanbuku.com/">
                            <div class="contentcorona">
                                <img src="https://rsu.tangerangselatankota.go.id/wp-content/uploads/covid-19/rsu.png" alt="">
                                <p>Hindari berkunjung ke <span style="font-size: 16px; font-weigt: bold;">RUMAH SAKIT</span> apabila tidak terlalu urgent!!!</p>
                            </div>
                            </a>
                        </div>
                        <div class="boxcorona">
                            <a href="http://kutipanbuku.com/">
                            <div class="contentcorona">
                                <img src="https://rsu.tangerangselatankota.go.id/wp-content/uploads/covid-19/medical-mask.png" alt="">
                                <p>Pakailah masker kain jika memang harus keluar rumah</p>
                            </div>
                        </a>
                        </div>
                        <div class="boxcorona">
                            <a href="http://kutipanbuku.com/">
                            <div class="contentcorona">
                                <img src="https://rsu.tangerangselatankota.go.id/wp-content/uploads/covid-19/washing-hand.png" alt="">
                                <p>Cuci Tangan pakai sabun dengan air yang mengalir</p>
                            </div>
                            </a>
                        </div>
                        <div class="boxcorona">
                            <a href="http://kutipanbuku.com/">
                            <div class="contentcorona">
                                <img src=https://rsu.tangerangselatankota.go.id/wp-content/uploads/covid-19/cold.png" alt="">
                                <p>Ketika batuk dan bersin, tutup mulut dan hidung dengan siku dalam tertekuk</p>
                            </div>
                            </a>
                        </div>
                        <div class="boxcorona">
                            <a href="http://kutipanbuku.com/">
                            <div class="contentcorona">
                                <img src="https://rsu.tangerangselatankota.go.id/wp-content/uploads/covid-19/first-aid-kit.png" alt="">
                                <p>Jika Anda mengalami demam dan kesulitan bernapas segera mencari perawatan medis</p>
                            </div>
                        </a>
                        </div>
                        <div class="boxcorona">
                            <a href="http://kutipanbuku.com/">
                            <div class="contentcorona">
                                <img src="https://rsu.tangerangselatankota.go.id/wp-content/uploads/covid-19/fever.png" alt="">
                                <p>Hindari kontak langsung dengan hewan yang sakit</p>
                            </div>
                            </a>
                        </div>
                    </div>
                    <!-- //Design Corona -->

                    <?php if (is_page_template('contact.php')): ?>

                        <div class="gmap" id="gmap"></div>

                    <?php endif; ?>

                    <!--BEGIN .container-->

                    <div class="container container-center row">

                        <!--BEGIN #content-->

                        <div id="content">
                        <marquee><i style="color: red; font-size: 11px;"><?php echo date ("d-M-Y"); ?> &nbsp; *Mohon Maaf, Selama Wabah Covid-19 Pendaftaran Rawat Jalan Tidak Bisa Melalui Online dan Sms*</i></marquee>
                            

                        <!-- Design Data Corona -->
                        <?php
                            $json = file_get_contents('https://api.kawalcorona.com/indonesia');
                            $data = json_decode($json, true);
                            // var_dump($json); die;
                        ?>
                        <?php
                            $json_p = file_get_contents('https://api.kawalcorona.com/indonesia/provinsi');
                            $data_p = json_decode($json_p);
                            // var_dump($data_p); die;
                        ?>
                        <div class="container">
                            <section class="section1">
                            <div class="positif">
                            <h3>Positif</h3>
                            <img src="https://rsu.tangerangselatankota.go.id/wp-content/uploads/covid-19/sad.png" alt="">
                            <h1 style=""><?php echo $data[0]['positif'] ?></h1><span> Orang</span>
                            </div>
                            <div class="meninggal">
                            <h3>Meninggal</h3>
                            <img src="https://rsu.tangerangselatankota.go.id/wp-content/uploads/covid-19/emoji.png" alt="">
                            <h1 style=""><?php echo $data[0]['meninggal'] ?></h1><span> Orang</span>
                            </div>
                            <div class="sembuh">
                            <h3>Sembuh</h3>
                            <img src="https://rsu.tangerangselatankota.go.id/wp-content/uploads/covid-19/happy.png" alt="">
                            <h1 style=""><?php echo $data[0]['sembuh'] ?></h1><span> Orang</span>
                            </div>
                            <p style="align: center; font-size: 13px; font-style: italic;"> Sumber data real time: <a href="https://www.covid19.go.id/" style="text-decoration: none; color: #000; font-weight: bold;" target="_blank">www.covid19.go.id</a></p>
                            </section>

                        <div class="row row-cards mt-5">
                                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-14">
                                                    <div class="card">
                                                        <div class="card-header ">
                                                            <h3 class="card-title">Data Kasus Coronavirus di Indonesia Berdasarkan Provinsi</h3>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="table-responsive service">
                                                                <table class="table table-bordered table-hover mb-0 text-nowrap css-serial">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="atasbro">No.</th>
                                                                            <th class="atasbro">Provinsi</th>
                                                                            <th style="color: red;" class="atasbro">Positif</th>
                                                                            <th class="atasbro">Sembuh</th>
                                                                            <th class="atasbro">Meninggal</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                            <?php
                                            if(!empty($data_p)){
                                                $no=1;
                                                foreach ($data_p as $key => $val) {
                                                if (!empty($val)) {
                                                    foreach ($val as $p => $value) {
                                            ?>
                                                                        <tr>
                                                                            <td><?php echo $no++ ?></td>
                                                                            <td><?php echo $value->Provinsi; ?></td>
                                                <td style="color: red;"><?php echo $value->Kasus_Posi; ?></td>
                                                <td><?php echo $value->Kasus_Semb; ?></td>
                                                <td><?php echo $value->Kasus_Meni; ?></td>
                                                                        </tr>
                                            <?php }}}} ?>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- COL END -->
                                            </div>
                    </div>
                        <!-- //Design Data Corona -->
                            
                            <?php

                            if (is_front_page()) {


                                evolve_content_boxes();
                                

                            }

