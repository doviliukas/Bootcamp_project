<section id="about">
    
    <div class=headerIII>
        
        <div class="header-innerIII">
        
            <div class="header-bodyIII">
                
                <ul class="place">
                    
                    <li style="padding-left: 20px";><div class="hexagon_profile" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
                    
                        <div class="hexTop_profile" ></div>
                    
                        <div class="hexBottom_profile"></div>
                    
                        </div>
                        
                    </li>
                         
                    <li>
                    
                        <ul class="place2" itemscope itemtype="http://schema.org/Person">

                            <li ><h1><?php the_field('a_gs_subtitle'); ?></h1></li>
                            
                            <li><h2><?php the_field('a_gs_subtitle2'); ?></h2></li>    
                            
                            <li style="padding-right: 20px";><?php the_content(); ?></li>

                                <?php

                                    if( have_rows('a_gl_social_link', 'option') ):

                                ?>

                                <ul class="icon">   

                                    <?php while ( have_rows('a_gl_social_link', 'option') ) : the_row(); 

                                        $url =

                                        get_sub_field('g_sl_sl_url', 'option');

                                        $icon =

                                        get_sub_field('g_sl_sl_network', 'option');

                                    ?>

                                    <div class="icon-<?php echo $icon; ?>"><a href="<?php echo $url; ?>" target="_blank"></a><li></li></div>


                                        <?php endwhile; ?>

                                 </ul>

                                        <?php endif; ?>
                            
                            </ul>

                    </li>
                
                </ul>
            
            </div>
        
        </div>
    
    </div>
    
</section>