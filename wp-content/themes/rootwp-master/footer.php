<?php // ?>
        <div class="templatemo-footer" >
            <div class="container">
                <div class="row">
                    <div class="text-center">

                        <div class="footer_container">

                                 <div class="col-md-3 border">
                                    <?php if ( is_active_sidebar( 'footer1' ) ) : ?>
                                            <?php dynamic_sidebar( 'footer1' ); ?>
                                    <?php endif; ?>                                    
                                </div>
                                <div class="col-md-3 border">
                                    <?php if ( is_active_sidebar( 'footer2' ) ) : ?>
                                            <?php dynamic_sidebar( 'footer2' ); ?>
                                    <?php endif; ?>                                    
                                </div>
                                <div class="col-md-3 border">
                                    <?php if ( is_active_sidebar( 'footer3' ) ) : ?>
                                            <?php dynamic_sidebar( 'footer3' ); ?>
                                    <?php endif; ?>                                    
                                </div>
                                <div class="col-md-3 border">
                                    <?php if ( is_active_sidebar( 'footer4' ) ) : ?>
                                            <?php dynamic_sidebar( 'footer4' ); ?>
                                    <?php endif; ?>                                    
                                </div>                           <div class="height30"></div>
                        </div>
                        <div class="footer_bottom_content">
                            Copyright © <?php echo date('Y'); ?> <a href="#">Your Company Name</a> 
                        	- Design: <a href="http://www.templatemo.com">templatemo</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <?php wp_footer(); ?>
    </body>
</html>