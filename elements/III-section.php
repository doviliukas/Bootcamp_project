<section id="getintouch">

    <div class="IV_element">
        
        <div class="IV_element-inner">
            
            <div class="IV_element-body">
                
                    <h3><?php the_title(); ?></h3>

                    <h4><?php the_field('g_gs_subtitle'); ?></h4>
                
                <ul class="placeIV">

                    <li>

                        <?php echo do_shortcode('[contact-form-7 id="8" title="Get in touch"]' ); ?>

                    </li>
  
                    <li class="placeIV-2">   

                        <div class="IV_element-body">

                            <ul>
                                
                                <li><p><?php the_content(); ?></li>

                                <li>
                                    
                                    <ul class="placeIV-3">
         
                                        <div class="icon-map">  

                                            <?php

                                                if( have_rows('a_gl_social_link', 'option') ):

                                            ?>

                                            <?php while ( have_rows('c_gl_adress', 'option') ) : the_row(); 

                                                $url =

                                                get_sub_field('c_gl_a_url', 'option');

                                                $icon =

                                                get_sub_field('c_gl_a_adresas', 'option');

                                            ?>

                                            <li><a href="<?php echo $url; ?>" target="_blank"><?php echo $icon; ?></a></li>

                                            <?php endwhile; ?>

                                            <?php endif; ?>

                                            </div>      

                                            <div class="icon-phone">

                                                <li><a href="<?php the_field('c_gl_number', 'option'); ?>"><?php the_field('c_gl_number', 'option'); ?></a></li>

                                            </div>

                                            <div class="icon-mail" itemscope itemtype="http://schema.org/Person">

                                                <li><a href="<?php the_field('c_gl_email', 'option'); ?>"><meta itemprop="email" content="<?php the_field('c_gl_email', 'option'); ?>"><?php the_field('c_gl_email', 'option'); ?></a></li>

                                            </div>

                                        </ul>
                                
                                    </li>
                                
                                </ul>
                            
                            </div> 
                        
                        </li>  

                    </ul>

                </div>

            </div>

        </div>

</section>