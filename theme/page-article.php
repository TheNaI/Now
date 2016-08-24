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
                    <?php
                        $cats = get_categories();
                        foreach ($cats as $c){
                    ?>
                    <li><a class="active" href="<?php $c->slug ?>"><?php echo $c->name?></a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="now-article">
                    <?php
                    $posts =  get_posts();
                    foreach ($posts as $post){
                        $api = file_get_contents( 'http://graph.facebook.com/?id=http://'.get_permalink() );

                        $count = json_decode( $api );
                        $share = $count->share->share_count;
                        if(!isset($share)){
                            $share = 0;

                        }
                    ?>
                    <div class="article">
                        <div class="article-header">
                            <div class="article-title">
                                <h3 class="title">
                                    <a href="<?php echo get_permalink() ?>"><?php echo $post->post_title; ?></a>
                                </h3>
                                <p class="sub-title">
                                    <?php
                                    $categories = get_the_category();
                                    $catArray = array();
                                    foreach( $categories as $category ) {
                                        array_push($catArray, $category->name);
                                    }
                                    echo implode(', ',$catArray);
                                    ?> / NEWS
                                </p>
                            </div>
                            <div class="article-social">
                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink() ?>" target="_blank">
                                    <i class="fa fa-facebook-square" aria-hidden="true"></i><br>
                                    <?php echo $share ?> SHARE
                                </a>
                            </div>
                        </div>
                        <div class="article-img">
                            <a href="<?php echo get_permalink() ?>">
                                <img src="<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); echo $feat_image; ?>" alt="">
                            </a>
                        </div>
                        <div class="article-detail">
                            <?php the_excerpt(); ?>
                        </div>
                        <div class="article-readmore">
                            <a href="<?php echo $post->post_name ?>" class="btn-readmore">READ MORE</a>
                        </div>
                    </div>
                    <?php }?>
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
                    <?php
                    $posts = get_posts('orderby=rand&numberposts=3');
                    foreach ($posts as $post){
                        ?>
                        <div class="article">
                            <a href="<?php echo get_permalink() ?>">
                                <img src="<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); echo $feat_image; ?>" alt="">
                            </a>
                            <div class="detail">
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                    <?php } ?>


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
