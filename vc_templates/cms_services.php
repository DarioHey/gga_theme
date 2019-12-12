<div class="cms-services-wraper cms-services-default">
    <div class="container">
        <div class="row">
            <?php $query = new WP_Query(array('posts_per_page'=> 6, 'post_type' => 'services', 'post_status'=> 'publish')); ?>
            <?php if($query->have_posts()):?>
            <div class="cms-services-inner clearfix">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <?php $_i = 0; while ($query->have_posts()): $query->the_post(); $_i++; ?>
                    <?php $services_meta = wp_experts_post_meta_data();?>
                        <li role="presentation" class="<?php if($_i == 1){ echo 'active'; } ?>">
                            <a href="#tab-<?php the_ID(); ?>" aria-controls="tab-<?php the_ID(); ?>" role="tab" data-toggle="tab">
                                <?php if(isset( $services_meta->_cms_services_icon)) { echo '<i class="'.esc_attr($services_meta->_cms_services_icon).'"></i>'; } ?>
                                <span><?php the_title(); ?></span>
                            </a>
                        </li>
                    <?php endwhile; ?>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <?php $_i = 0; while ($query->have_posts()): $query->the_post(); $_i++; ?>
                        <?php $services_meta = wp_experts_post_meta_data();?>
                        <div role="tabpanel" class="tab-pane fade in column-same-height clearfix<?php if($_i == 1){ echo ' active'; } ?>" id="tab-<?php the_ID(); ?>">
                            <div class="cms-services-content-left wpb_column col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <?php if(has_post_thumbnail(get_the_ID())): ?>
                                    <?php $thumbnail = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID(), 'full') ); ?>
                                <?php else : ?>
                                    <?php $thumbnail = '' .get_template_directory_uri(). '/assets/images/no-image.jpg'; ?>
                                <?php endif; ?>
                                <div class="post-thumbnail" style="background-image: url(<?php echo esc_url($thumbnail); ?>);"></div>
                            </div>
                            <div class="cms-services-content-right wpb_column col-sm-offset-6 col-md-offset-6 col-lg-offset-6  col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="cms-services-content-after"></div>
                                <div class="cms-services-title"><h3><?php the_title(); ?></h3></div>
                                <?php if(isset($services_meta->_cms_services_description_overview)){ echo '<div class="cms-services-content">'.esc_attr($services_meta->_cms_services_description_overview).'</div>'; } ?>
                                <div class="cms-services-readmore"><a class="btn btn-default" href="<?php the_permalink(); ?>"><?php esc_html_e('Read More','wp-experts'); ?><i style="padding-left: 6px;" class="fa fa-plus"></i></a></div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>