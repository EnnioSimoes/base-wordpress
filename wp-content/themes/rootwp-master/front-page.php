<?php get_header(); 

$slide = new WP_Query(
        array(
            'post_type'     => 'slide',
            'orderby'       => 'menu_order',
            'order'         => 'ACS'
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
                            <a class="active" href=".gallery">All</a> / <a href=".gallery-design">Web Design </a>/ <a href=".gallery-graphic">Graphic</a> / <a href=".gallery-inspiration">Inspiration</a> / <a href=".gallery-creative">Creative</a>							
                        </div>
                    </div>
                </div> <!-- /.row -->


                <div class="clearfix"></div>
                <div class="text-center">
                    <ul class="templatemo-project-gallery" >
                        <li class="col-lg-2 col-md-2 col-sm-2  gallery gallery-graphic" >
                            <a class="colorbox" href="<?php echo PW_THEME_URL;?>images/full-gallery-image-1.jpg" data-group="gallery-graphic">
                                <div class="templatemo-project-box">

                                    <img src="<?php echo PW_THEME_URL;?>images/gallery-image-1.jpg" class="img-responsive" alt="gallery" />

                                    <div class="project-overlay">
                                        <h5>Graphic</h5>
                                        <hr />
                                        <h4>TEA POT</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="col-lg-2 col-md-2 col-sm-2  gallery gallery-creative" >
                            <a class="colorbox" href="<?php echo PW_THEME_URL;?>images/full-gallery-image-2.jpg" data-group="gallery-creative">
                                <div class="templatemo-project-box">
                                    <img src="<?php echo PW_THEME_URL;?>images/gallery-image-2.jpg" class="img-responsive" alt="gallery" />
                                    <div class="project-overlay">
                                        <h5>Creative</h5>
                                        <hr />
                                        <h4>BREAKFAST</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="col-lg-2 col-md-2 col-sm-2  gallery gallery-inspiration" >
                            <a class="colorbox" href="<?php echo PW_THEME_URL;?>images/full-gallery-image-3.jpg" data-group="gallery-inspiration">
                                <div class="templatemo-project-box">
                                    <img src="<?php echo PW_THEME_URL;?>images/gallery-image-3.jpg" class="img-responsive" alt="gallery" />
                                    <div class="project-overlay">
                                        <h5>Inspiration</h5>
                                        <hr />
                                        <h4>GREEN COLORS</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="col-lg-2 col-md-2 col-sm-2  gallery gallery-design" >
                            <a class="colorbox" href="<?php echo PW_THEME_URL;?>images/full-gallery-image-4.jpg" data-group="gallery-design">
                                <div class="templatemo-project-box">
                                    <img src="<?php echo PW_THEME_URL;?>images/gallery-image-4.jpg" class="img-responsive" alt="gallery" />
                                    <div class="project-overlay">
                                        <h5>Web Design</h5>
                                        <hr />
                                        <h4>CAMERA</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="col-lg-2 col-md-2 col-sm-2  gallery gallery-inspiration" >
                            <a class="colorbox" href="<?php echo PW_THEME_URL;?>images/full-gallery-image-5.jpg" data-group="gallery-inspiration">
                                <div class="templatemo-project-box">
                                    <img src="<?php echo PW_THEME_URL;?>images/gallery-image-5.jpg" class="img-responsive" alt="gallery" />
                                    <div class="project-overlay">
                                        <h5>Inspiration</h5>
                                        <hr />
                                        <h4>PLANT</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="col-lg-2 col-md-2 col-sm-2  gallery gallery-inspiration" >
                            <a class="colorbox" href="<?php echo PW_THEME_URL;?>images/full-gallery-image-6.jpg" data-group="gallery-inspiration">
                                <div class="templatemo-project-box">
                                    <img src="<?php echo PW_THEME_URL;?>images/gallery-image-6.jpg" class="img-responsive" alt="gallery" />
                                    <div class="project-overlay">
                                        <h5>Inspiration</h5>
                                        <hr />
                                        <h4>CABLE TRAIN</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        
                        <li class="col-lg-2 col-md-2 col-sm-2 gallery gallery-design" >
                            <a class="colorbox" href="<?php echo PW_THEME_URL;?>images/full-gallery-image-7.jpg" data-group="gallery-design">
                                <div class="templatemo-project-box">
                                    <img src="<?php echo PW_THEME_URL;?>images/gallery-image-7.jpg" class="img-responsive" alt="gallery" />
                                    <div class="project-overlay">
                                        <h5>Web Design</h5>
                                        <hr />
                                        <h4>CITY</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        
                        <li class="col-lg-2 col-md-2 col-sm-2 gallery gallery-creative" >
                            <a class="colorbox" href="<?php echo PW_THEME_URL;?>images/full-gallery-image-8.jpg" data-group="gallery-creative">
                                <div class="templatemo-project-box">
                                    <img src="<?php echo PW_THEME_URL;?>images/gallery-image-8.jpg" class="img-responsive" alt="gallery" />
                                    <div class="project-overlay">
                                        <h5>Creative</h5>
                                        <hr />
                                        <h4>BIRDS</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        
                        <li class="col-lg-2 col-md-2 col-sm-2 gallery gallery-graphic" >
                            <a class="colorbox" href="<?php echo PW_THEME_URL;?>images/full-gallery-image-9.jpg" data-group="gallery-graphic">
                                <div class="templatemo-project-box">
                                    <img src="<?php echo PW_THEME_URL;?>images/gallery-image-9.jpg" class="img-responsive" alt="gallery" />
                                    <div class="project-overlay">
                                        <h5>Graphic</h5>
                                        <hr />
                                        <h4>NATURE</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        
                        <li class="col-lg-2 col-md-2 col-sm-2 gallery gallery-inspiration" >
                            <a class="colorbox" href="<?php echo PW_THEME_URL;?>images/full-gallery-image-10.jpg" data-group="gallery-inspiration">
                                <div class="templatemo-project-box">
                                    <img src="<?php echo PW_THEME_URL;?>images/gallery-image-10.jpg" class="img-responsive" alt="gallery" />
                                    <div class="project-overlay">
                                        <h5>Inspiration</h5>
                                        <hr />
                                        <h4>DOGGY</h4>
                                    </div>
                                </div>
                            </a>
                        </li>

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

                <div class="col-sm-5 col-md-6 blog_post">
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




