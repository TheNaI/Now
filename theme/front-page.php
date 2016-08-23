<?php
/**
 * The main template file
 */

get_header(); ?>
    <div class="container">
        <div class="container-body">
            <div class="row">
                <div class="col-xs-12">
                    <h3 class="now-title text-center">
                        PORTFOLIO (PROJECTS)<br>
                        <i class="dot-title"></i>
                        <i class="dot-title"></i>
                        <i class="dot-title"></i>
                        <i class="dot-title"></i>
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="home-ports clearfix">
                    <div class="now-port type1">
                        <a href="#">
                            <img src="<?php echo get_bloginfo('template_url')?>/img/p1.png" alt="">
                        </a>
                    </div>
                    <div class="now-port type2">
                        <a href="#">
                            <img src="<?php echo get_bloginfo('template_url')?>/img/p2.png" alt="">
                        </a>
                    </div>
                    <div class="now-port ">
                        <a href="#">
                            <img src="<?php echo get_bloginfo('template_url')?>/img/p3.png" alt="">
                        </a>
                    </div>
                    <div class="now-port ">
                        <a href="#">
                            <img src="<?php echo get_bloginfo('template_url')?>/img/p4.png" alt="">
                        </a>
                    </div>
                    <div class="now-port ">
                        <a href="#">
                            <img src="<?php echo get_bloginfo('template_url')?>/img/p5.png" alt="">
                        </a>
                    </div>
                    <div class="now-port ">
                        <a href="#">
                            <img src="<?php echo get_bloginfo('template_url')?>/img/p6.png" alt="">
                        </a>
                    </div>
                    <div class="now-port s-type1">
                        <a href="#">
                            <img src="<?php echo get_bloginfo('template_url')?>/img/ps-1.png" alt="">
                        </a>
                    </div>
                    <div class="now-port s-type2">
                        <a href="#">
                            <img src="<?php echo get_bloginfo('template_url')?>/img/ps-2.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 text-center">
                    <a href="#" class="see-more">SEE MORE</a>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>