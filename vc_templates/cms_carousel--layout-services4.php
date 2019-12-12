<div data-padding='0' class="cms-carousel layout-services services-layout4 <?php echo esc_attr($atts['template']);?>" id="<?php echo esc_attr($atts['html_id']);?>">
    <?php
        $posts = $atts['posts'];
        while($posts->have_posts()){
            $posts->the_post();
            $services_meta = wp_experts_post_meta_data();
            $services_description = isset( $services_meta->_cms_services_description) ? $services_meta->_cms_services_description : '';
            $services_subtitle = isset( $services_meta->_cms_services_subtitle) ? $services_meta->_cms_services_subtitle : '';
            $services_icon = isset( $services_meta->_cms_services_icon) ? $services_meta->_cms_services_icon : '';
            ?>
            <div class="cms-services-item">
                <div class="cms-services-item-inner text-center">
                    <div class="cms-services-header">
                        <div class="cms-services-meta">
                            <i class="cms-services-icon <?php echo  esc_attr($services_icon); ?>"></i>
                            <div class="cms-services-meta-right">
                                <div class="cms-services-meta-right-inner">
                                    <h3 class="cms-services-title"><a href="<?php the_permalink() ?>" ><?php the_title();?></a></h3>
                                    <div class="line-gap"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cms-services-body">
                        <div class="cms-services-content">
                            <?php echo  esc_attr($services_description); ?>
                        </div>
                        <div class="cms-services-readmore style1">
                            <a class="btn btn-xs" href="<?php the_permalink() ?>" ><i class="fa fa-long-arrow-right"></i><span><?php esc_html_e('Read More', "wp-experts"); ?></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
    ?>
</div>