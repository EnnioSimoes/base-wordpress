<?php get_header(); ?> 
<div class="container">
    <div class="row">
        <div class="col-md-9">
                <div class="blog_box">
                <?php
                $i = 1;

                while (have_posts() && $i <= 4){ 
                    the_post(); 
                    $title = get_the_title();
                    $permalink = get_permalink();
                    $author = get_the_author();    
                    $date = get_the_date();
                ?>

                <div class="col-sm-11 col-md-12 blog_post">
                    <ul class="list-inline">
                        <li class="col-md-4">
                            <?php  
                            printf(
                            '<a href="%s" title="%s">%s</a>',   
                            $permalink,
                            $title,
                            get_the_post_thumbnail(NULL, array( 152, 152))
                            );
                            ?>
                        </li>
                        <li  class="col-md-8">
                            <div class="pull-left">
                                <span class="blog_header"><?php  echo $title; ?></span><br/>
                                <span>Posted by : <?php the_author_posts_link(); ?> </span>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-orange" href="<?php echo $permalink; ?>" role="button"><?php echo $date; ?></a>
                            </div>
                            <div class="clearfix"> </div>
                            <p class="blog_text">
                                <?php echo get_the_excerpt(); ?>
                            </p>
                        </li>
                    </ul>
                </div>          
                <?php $i++; } ?>           
                </div>
        </div>
        <div class="col-md-3">
            <?php if ( is_active_sidebar( 'blog-sidebar' ) ) : ?>
                    <?php dynamic_sidebar( 'blog-sidebar' ); ?>
            <?php endif; ?>            
        </div>
    </div>
</div>
<?php get_footer(); ?>