<?php 
    /* get categories */
        $taxo = 'teams-categories';
        $_category = array();
        if(!isset($args['cat']) || $args['cat']==''){
            $terms = get_terms($taxo);
            foreach ($terms as $cat){
                $_category[] = $cat->term_id;
            }
        } else {
            $_category  = explode(',', $args['cat']);
        }
        $atts['categories'] = $_category;
        $pretty_rel_random = ' rel="prettyPhoto[rel-' . get_the_ID() . '-' . rand() . ']"'; //rel-'.rand();
?>
<div class="layout-team team-layout1 filtrer-center cms-grid-wraper <?php echo esc_attr($atts['template']);?>" id="<?php echo esc_attr($atts['html_id']);?>">
    <?php if($atts['filter']=="true" and $atts['layout']=='masonry'):?>
        <div class="cms-grid-filter">
            <ul>
                <li><a class="active" href="#" data-group="all"><?php esc_html_e('All', "wp-experts"); ?></a></li>
                <?php foreach($atts['categories'] as $category):?>
                    <?php $term = get_term( $category, $taxo );?>
                    <li><a href="#" data-group="<?php echo esc_attr('category-'.$term->slug);?>">
                            <?php echo esc_html($term->name);?>
                        </a>
                    </li>
                <?php endforeach;?>
            </ul>
        </div>
    <?php endif;?>
    <div class="clearfix row <?php echo esc_attr($atts['grid_class']);?>">
        <?php
        $posts = $atts['posts'];
        $size = 'full';
        while($posts->have_posts()){
            $posts->the_post();
            $groups = array();
            $groups[] = '"all"';
            $team_meta = wp_experts_post_meta_data();
	     $meta = get_post_meta($post->ID);
	     $metaGridData = get_post_meta(get_the_ID());
 	     
	     $show_hide_navigation = isset( $atts['show_hide_navigation'] ) ? $atts['show_hide_navigation'] : 'yes';
            foreach(cmsGetCategoriesByPostID(get_the_ID(),$taxo) as $category){
                $groups[] = '"category-'.$category->slug.'"';
            }
            ?>
            <div class="cms-grid-item cms-team-item <?php echo esc_attr($atts['item_class']);?>" data-groups='[<?php echo implode(',', $groups);?>]'>
                <div class="cms-grid-item-inner cms-team-item-inner">
                    <div class="cms-team-image" data-toggle="modal" data-target="#myModal<?=get_the_ID();?>">
                        <?php
			 if(has_post_thumbnail() && !post_password_required() && !is_attachment() &&  wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), $size, false)):
                                $class = ' has-thumbnail';
                                $thumbnail_url = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), $size, false);
                                $thumbnail = get_the_post_thumbnail(get_the_ID(),'full');
                            else:
                                $class = ' no-image';
                                $thumbnail_url[0] = get_template_directory_uri(). '/assets/images/no-image.jpg';
                                $thumbnail = '<img src="'.esc_url(get_template_directory_uri(). '/assets/images/no-image-370x420.jpg').'" alt="'.get_the_title().'" />';
                            endif;
                            echo '<div class="cms-grid-media '.esc_attr($class).'">'.$thumbnail.'</div>';
                        ?>
                        <div class="team-meta-hover text-center">
                            <h3 class="cms-team-title"><?php the_title();?></h3>
                            <div class="cms-team-position">
                                <?php echo  esc_attr($team_meta->_cms_team_position); ?>
                            </div> 
			</div>
                    </div>
                    <div class="cms-team-meta text-center">
                        <h3 class="cms-team-title"><?php the_title();?></h3>
                        <div class="cms-team-position">
                            <?php echo  esc_attr($team_meta->_cms_team_position); ?>
                        </div>
                        <div class="cms-team-social">
                            <?php
                                for($i=1;$i<5;$i++){
                                    $icon = $team_meta->{"_cms_icon".$i};
                                    $link = $team_meta->{"_cms_link".$i};
                                    if(!empty($icon) && !empty($link)): ?>
                                        <a class="<?php echo esc_attr($icon);?>" href="<?php echo esc_url($link);?>"></a> 
                                    <?php endif;
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
<div class="modal fade" id="myModal<?=get_the_ID()?>" tabindex="-1" role="dialog" data-backdrop="true"  aria-labelledby="myModalLabel" style="margin-top:100px;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         <div class="pull-left imgbox" style="margin-right:10px;"> <?=$thumbnail?> </div>
	 <div class="pull-left tbox">
	   <h3 class="modal-title" id="myModalLabel"><?php the_title();?></h3>
	   <i> <?php echo  esc_attr($team_meta->_cms_team_position); ?> </i>
	</div>
	<div class="clearfix"></div>
      </div>
      <div class="modal-body">
        <?=$metaGridData['eg-bio'][0]?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

	    
       <?php
        }
        ?>
    </div>

    <?php if($show_hide_navigation == 'yes') {
        wp_experts_paging_nav();
    } ?>
<style>
.modal-backdrop { z-index:0 !important;}
.imgbox img{border-radius: 296px;width: 70px; }
.tbox{margin-top:10px !important;}
</style>
