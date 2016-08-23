<?php
/**
 * Template Name: Article Page
 */

get_header(); ?>
<div class="container">
    <div class="container-body">
        <div class="row">
            <div class="col-xs-12">
                <h3 class="now-title text-center">
                    ARTICLES<br>
                    <i class="dot-title"></i>
                    <i class="dot-title"></i>
                    <i class="dot-title"></i>
                    <i class="dot-title"></i>
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <ul class="type-article">
                    <li><a class="active" href="#">TYPE ARTICLE 1</a></li>
                    <li><a href="#">TYPE ARTICLE 2</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="now-article">
                    <div class="article">
                        <div class="article-header">
                            <div class="article-title">
                                <h3 class="title">
                                    <a href="#">TITLE BLOG</a>
                                </h3>
                                <p class="sub-title">
                                    TYPE ARTICLE 1 / NEWS
                                </p>
                            </div>
                            <div class="article-social">
                                <a href="#">
                                    <i class="fa fa-facebook-square" aria-hidden="true"></i><br>
                                    199 SHARE
                                </a>
                            </div>
                        </div>
                        <div class="article-img">
                            <a href="#">
                                <img src="<?php echo get_bloginfo('template_url')?>/img/article-img.jpg" alt="">
                            </a>
                        </div>
                        <div class="article-detail">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae ducimus fugiat laborum nihil, odit omnis. Asperiores aspernatur cum deleniti enim, fuga laboriosam maiores nihil non odio officiis quo sequi voluptatum?
                        </div>
                        <div class="article-readmore">
                            <a href="#" class="btn-readmore">READ MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="other-article">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h3 class="title text-center">
                    OTHER ARTICLE
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="article-row">
                    <div class="article">
                        <a href="#">
                            <img src="<?php echo get_bloginfo('template_url')?>/img/article-img.jpg" alt="">
                        </a>
                        <div class="detail">
                            Lorem ipsum dolor ctetur adipiscing elit.
                        </div>
                    </div>
                    <div class="article">
                        <a href="#">
                            <img src="<?php echo get_bloginfo('template_url')?>/img/article-img.jpg" alt="">
                        </a>
                        <div class="detail">
                            Lorem ipsum dolor ctetur adipiscing elit.
                        </div>
                    </div>
                    <div class="article">
                        <a href="#">
                            <img src="<?php echo get_bloginfo('template_url')?>/img/article-img.jpg" alt="">
                        </a>
                        <div class="detail">
                            Lorem ipsum dolor ctetur adipiscing elit.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="other-article-nav">
                    <a href="#" class="btn-pre"><i class="fa fa-angle-left"></i></a>
                    <a href="#" class="btn-next next"><i class="fa fa-angle-right"></i> NEXT</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="footer-article"></div>
<?php

include('footer.php');

?>
