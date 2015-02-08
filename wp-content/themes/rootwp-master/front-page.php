<?php get_header(); 

$slide = new WP_Query(
        array(
            'post_type'     => 'slide',
            'orderby'       => 'menu_order',
            'order'         => 'ACS'
        )
        );
$blog = new WP_Query(
        array(
            'post_type'         => 'post',
            'orderby'           => 'menu_order',
            'order'             => 'ACS',
            'posts_per_page'    => 4
        )
        );
$portfolio = new WP_Query(
        array(
            'post_type'         => 'portfolio',
            'orderby'           => 'menu_order',
            'order'             => 'ACS',
            'posts_per_page'    => 20
        )
        );
?>    
<?php if($slide->have_posts()) { ?>
        <!-- Slideshow 4 -->
        <div class="callbacks_container">
          <ul class="rslides" id="slider4">
              <?php while ($slide->have_posts()){ $slide->the_post(); global $post;?>
            <li>
                <?php the_post_thumbnail('full'); ?>
              <p class="caption"><?php echo $post->post_content; ?></p>
            </li>
            <?php } ?>
          </ul>
        </div>
<?php } ?>
        <div class="templatemo-welcome" id="templatemo-welcome">
            <div class="container">
                <div class="templatemo-slogan text-center">
                    <span class="txt_darkgrey">Welcome to </span><span class="txt_orange">Urbanic Design</span>
                    <p class="txt_slogan"><i>Lorem ipsum dolor sit amet, consect adipiscing elit. Etiam metus libero mauriec ignissim fermentum.</i></p>
                </div>	
            </div>
        </div>
        
        <div class="templatemo-service">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="templatemo-service-item">
                            <div>
                                <img src="<?php echo PW_THEME_URL;?>images/leaf.png" alt="icon" />
                                <span class="templatemo-service-item-header">AWESOME ICONS</span>
                            </div>
                            <p>Nam porta adipiscing tortor, eget rutrum turpis bibendum ut. Donec eu lacus in diam euismod imperdiet eu ut turpis. Morbi felis orci, tincidunt pretium laoreet id, euismod et lacus. Praesent aliquet magna vitae mi elementum pharetra.</p>
                            <div class="text-center">
                            	<a href="#" 
                                	class="templatemo-btn-read-more btn btn-orange">READ MORE</a>
                            </div>
                            <br class="clearfix"/>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="templatemo-service-item" >
                            <div>
                                <img src="<?php echo PW_THEME_URL;?>images/mobile.png" alt="icon"/>
                                <span class="templatemo-service-item-header">FULLY RESPONSIVE</span>
                            </div>
							<p><a rel="nofollow" href="http://www.templatemo.com/preview/templatemo_395_urbanic">Urbanic</a> is free responsive HTML5 template by templatemo. Credits go to <a rel="nofollow" href="http://getbootstrap.com">Bootstrap</a> for responsive layout and <a rel="nofollow" href="http://unsplash.com">Unsplash</a> for images used in this free template. Curabitur non eros ut dolor tincidunt interdum sit amet vitae quam.</p>
                            <div class="text-center">
                                <a href="#" 
                                	class="templatemo-btn-read-more btn btn-orange">READ MORE</a>
                            </div>
                            <br class="clearfix"/>
                        </div>
                        
                    </div>
                    
                    <div class="col-md-4">
                        <div class="templatemo-service-item">
                            <div>
                                <img src="<?php echo PW_THEME_URL;?>images/battery.png" alt="icon"/>
                                <span class="templatemo-service-item-header">HIGH EFFICIENCY</span>
                            </div>
                            <p>Morbi imperdiet ipsum sit amet dui pharetra, vulputate porta neque tristique. Quisque id turpis tristique, venenatis erat sit amet, venenatis turpis. Ut tellus ipsum, posuere bibendum consectetur vel, egestas sit amet erat. Morbi rhoncus leo fermentum viverra.</p>
                            <div class="text-center">
                                <a href="#" 
                                	class="templatemo-btn-read-more btn btn-orange">READ MORE</a>
                            </div>
                            <br class="clearfix"/>
                        </div>
                        <br class="clearfix"/>
                    </div>
                </div>
            </div>
        </div>

        <div class="templatemo-team" id="templatemo-about">
            <div class="container">
                <div class="row">
                    <div class="templatemo-line-header">
                        <div class="text-center">
                            <hr class="team_hr team_hr_left"/><span>MEET OUR TEAM</span>
                            <hr class="team_hr team_hr_right" />
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
                    <ul class="row row_team">
                        <li class="col-lg-3 col-md-3 col-sm-6 ">
                            <div class="text-center">
                                <div class="member-thumb">
                                    <img src="<?php echo PW_THEME_URL;?>images/member1.jpg" class="img-responsive" alt="member 1" />
                                    <div class="thumb-overlay">
                                        <a href="#"><span class="social-icon-fb"></span></a>
                                        <a href="#"><span class="social-icon-twitter"></span></a>
                                        <a href="#"><span class="social-icon-linkedin"></span></a>
                                    </div>
                                </div>
                                <div class="team-inner">
                                    <p class="team-inner-header">TRACY</p>
                                    <p class="team-inner-subtext">Designer</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-3 col-md-3 col-sm-6 ">
                            <div class="text-center">
                                <div class="member-thumb">
                                    <img src="<?php echo PW_THEME_URL;?>images/member2.jpg" class="img-responsive" alt="member 2" />
                                    <div class="thumb-overlay">
                                        <a href="#"><span class="social-icon-fb"></span></a>
                                        <a href="#"><span class="social-icon-twitter"></span></a>
                                        <a href="#"><span class="social-icon-linkedin"></span></a>
                                    </div>
                                </div>
                                <div class="team-inner">
                                    <p class="team-inner-header">MARY</p>
                                    <p class="team-inner-subtext">Developer</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-3 col-md-3 col-sm-6 ">
                            <div class="text-center">
                                <div class="member-thumb">
                                    <img src="<?php echo PW_THEME_URL;?>images/member3.jpg" class="img-responsive" alt="member 3" />
                                    <div class="thumb-overlay">
                                        <a href="#"><span class="social-icon-fb"></span></a>
                                        <a href="#"><span class="social-icon-twitter"></span></a>
                                        <a href="#"><span class="social-icon-linkedin"></span></a>
                                    </div>
                                </div>
                                <div class="team-inner">
                                    <p class="team-inner-header">JULIA</p>
                                    <p class="team-inner-subtext">Director</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-3 col-md-3 col-sm-6 ">
                            <div class="text-center">
                                <div class="member-thumb">
                                    <img src="<?php echo PW_THEME_URL;?>images/member4.jpg" class="img-responsive" alt="member 4" />
                                    <div class="thumb-overlay">
                                        <a href="#"><span class="social-icon-fb"></span></a>
                                        <a href="#"><span class="social-icon-twitter"></span></a>
                                        <a href="#"><span class="social-icon-linkedin"></span></a>
                                    </div>
                                </div>
                                <div class="team-inner">
                                    <p class="team-inner-header">LINDA</p>
                                    <p class="team-inner-subtext">Manager</p>
                                </div>
                            </div>
                        </li>
                    </ul>
            </div>
        </div><!-- /.templatemo-team -->

        <div id="templatemo-portfolio" >
            <div class="container">
                <div class="row">
                    <div class="templatemo-line-header" >
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="txt_darkgrey">OUR PORTFOLIO</span>
                            <hr class="team_hr team_hr_right hr_gray" />
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="templatemo-gallery-category" style="font-size:16px; margin-top:80px;">
                        <div class="text-center">
                            <?php
                            if($portfolio->have_posts()){
                                //while ($portfolio->have_posts()) {
                                    //$portfolio->the_post();
                                    //global $post;
                                    $termos =get_terms('Categoria');
                                    $i = 0;
                                    $qtde = sizeof($termos);
                                    //echo $qtde;
                                    foreach ($termos as $termo):
                                        ?>
                                            <a href=".gallery-<?= $termo->name; ?>" <?php if($i == 0){echo'class="active"';}?> > <?= $termo->name;?></a>
                                        <?php
                                        $i++;
                                        if ($i != $qtde) {
                                            echo' / ';
                                        }
                                    endforeach;
                                //}
                            }
                            //echo '<br><pre>';
                            //$termos = get_terms('Categoria');
                            //print_r($termos);
                            ?>
                            <!--            
                            <a class="active" href=".gallery">All</a> / <a href=".gallery-design">Web Design </a>/ <a href=".gallery-graphic">Graphic</a> / <a href=".gallery-inspiration">Inspiration</a> / <a href=".gallery-creative">Creative</a>	
                            -->
                        </div>
                    </div>
                </div> <!-- /.row -->

                <div class="clearfix"></div>
                <div class="text-center">
                    <ul class="templatemo-project-gallery" >
                        <?php
                        while ($portfolio->have_posts()){ 
                            $portfolio->the_post(); 
                            global $post;
                            $imgUrl = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                            $term_list=wp_get_post_terms($post->ID, 'Categoria', array("fields" => "names")); 
                            //print_r($term_list);
                        ?>                        
                        <li class="col-lg-2 col-md-2 col-sm-2  gallery 
                            <?php foreach ($term_list as $names): ?>
                            gallery-<?=$names; ?>
                            <?php endforeach; ?>
                        ">
                            <a class="colorbox" href="<?=$imgUrl;?>" data-group="gallery-graphic">
                                <div class="templatemo-project-box">
                                    <?php the_post_thumbnail(array('200','200'), array('class'=>'img-responsive')) ?>
                                    <div class="project-overlay">
                                        <h5><?php the_title(); ?></h5>
                                        <hr />
                                        <h4><?php the_excerpt(); ?></h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <?php } ?>
                    </ul><!-- /.gallery -->
                </div>
                <div class="clearfix"></div>
                <div class="row text-center">
                    <a class="btn_loadmore btn btn-lg btn-orange" href="#" role="button">LOAD MORE</a>
                </div>
            </div><!-- /.container -->
        </div> <!-- /.templatemo-portfolio -->

        <div id="templatemo-blog">
            <div class="container">
                <div class="row">
                    <div class="templatemo-line-header" style="margin-top: 0px;" >
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="span_blog txt_darkgrey">BLOG POSTS</span>
                            <hr class="team_hr team_hr_right hr_gray" />
                        </div>
                    </div>
                    <br class="clearfix"/>
                </div>
                <?php if($blog->have_posts()) { ?>
                <div class="blog_box">
                <?php
                while ($blog->have_posts()){ 
                    $blog->the_post(); 
                    global $post;
                ?>
                <div class="col-sm-5 col-md-6 blog_post">
                    <ul class="list-inline">
                        <li class="col-md-4">
                            <a href="<?php echo get_permalink(); ?>">
                            <?php the_post_thumbnail(array('150','150')); ?>
                            </a>
                        </li>
                        <li class="col-md-8">
                            <div class="pull-left">
                                <span class="blog_header"><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></span><br>
                                <span>Posted by : <span class="txt_orange"><?php echo get_the_author() ?></span></span>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-orange" href="#" role="button"><?php echo get_the_date(); ?></a>
                            </div>
                            <div class="clearfix"> </div>
                            <p class="blog_text">
                                <?php echo the_excerpt(); ?>
                            </p>
                        </li>
                    </ul>	
                </div>
        
                <?php } ?>           
                </div>
                <?php } ?>
            </div>
        </div>

        <div id="templatemo-contact">
            <div class="container">
                <div class="row">
                    <div class="templatemo-line-header head_contact">
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="txt_darkgrey">CONTACT US</span>
                            <hr class="team_hr team_hr_right hr_gray"/>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="templatemo-contact-map" id="map-canvas"> </div>  
                        <div class="clearfix"></div>
                        <i>You can find us on 123 Dagon Studio, Yankin Street, <span class="txt_orange">Digital Estate</span> in Yangon.</i>
                    </div>
                    <div class="col-md-4 contact_right">
                        <p>Lorem ipsum dolor sit amet, consectetu adipiscing elit pendisse as a molesti.</p>
                        <p><img src="<?php echo PW_THEME_URL;?>images/location.png" alt="icon 1" /> 123 Dagon Studio, Yakin Street, Digital Estate</p>
                        <p><img src="<?php echo PW_THEME_URL;?>images/phone1.png"  alt="icon 2" /> 010-020-0340</p>
                        <p><img src="<?php echo PW_THEME_URL;?>images/globe.png" alt="icon 3" /><a class="link_orange" href="#"><span class="txt_orange">www.company.com</span></a></p>
                        <form class="form-horizontal" action="#">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Your Name..." maxlength="40" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Your Email..." maxlength="40" />
                            </div>
                            <div class="form-group">
                                <textarea  class="form-control" style="height: 130px;" placeholder="Write down your message..."></textarea>
                            </div>
                            <button type="submit" class="btn btn-orange pull-right">SEND</button>
                        </form>
                        	
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /#templatemo-contact -->
<?php get_footer(); ?>




