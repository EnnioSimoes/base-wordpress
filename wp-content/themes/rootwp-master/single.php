<?php get_header(); ?> 
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="container">
    <div class="row">
        <div class="col-md-9">
                <?php the_post(); ?>
                <div class="title">
                    <h1><?php the_title(); ?></h1>
                </div>
                <?php the_post_thumbnail(NULL, array('class'=>'img-responsive center-block')); ?>
                <br />
                <?php get_the_post_thumbnail(); ?>
                <div class="post-content">
                    <?php the_content(); ?>
                </div>
                <?php //comments_template(); ?>     
                <br />
                <br />
                <br />
                <div class="fb-comments" data-href="http://developers.facebook.com/docs/plugins/comments/" data-numposts="5" data-colorscheme="light"></div>
        </div>
        <div class="col-md-3">
            <?php if ( is_active_sidebar( 'blog-sidebar' ) ) : ?>
                    <?php dynamic_sidebar( 'blog-sidebar' ); ?>
            <?php endif; ?>            
        </div>
    </div>
</div>
<?php get_footer(); ?>