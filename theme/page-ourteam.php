<?php
/**
 * Template Name: Our team Page
 */

get_header(); ?>
<div class="container">
    <div class="container-body">
        <div class="row">
            <div class="col-xs-12">
                <h3 class="now-title text-center">
                    OURTEAM<br>
                    <i class="dot-title"></i>
                    <i class="dot-title"></i>
                    <i class="dot-title"></i>
                    <i class="dot-title"></i>
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="icon-row">
                    <ul class="icon">
                        <li>
                            <i class="now-icon icon-strategic"></i><br>
                            STRATEGIC PLANNER
                        </li>
                        <li>
                            <i class="now-icon icon-media"></i><br>
                            DIGITAL MEDIA
                        </li>
                        <li>
                            <i class="now-icon icon-graphic"></i><br>
                            CREATIVE GRAPHIC
                        </li>
                        <li>
                            <i class="now-icon icon-content"></i><br>
                            DIGITAL CONTENT
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="ourteam-content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nunc sapien,
                    egestas sed lobortis nec, varius quis orci. Integer dignissim, purus eget
                    sollicitudin bibendum, nulla dolor fermentum leo, pharetra luctus sapien
                    ante sed nibh. Aliquam erat volutpat. Ut blandit cursus dignissim. Integer
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="ourteam-img">
                    <img src="<?php echo get_bloginfo('template_url')?>/img/team.png" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 text-center">
                <a href="#" class="join">JOIN US</a>
            </div>
        </div>
    </div>
</div>
<?php

include('footer.php');

?>
