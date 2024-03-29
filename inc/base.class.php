<?php

class WP_Experts_Base
{
    /**
     * Page title
     * 
     * @since 1.0.0
     */
    public static function wp_experts_get_page_title(){
        global $wp_experts_meta;
        
        if (!is_archive()){
            /* page. */
            if(is_page()) :
                /* custom title. */
                if(!empty($wp_experts_meta->_cms_page_title_text) && $wp_experts_meta->_cms_page_title_text):
                    echo esc_attr($wp_experts_meta->_cms_page_title_text);
                else :
                    the_title();
                endif;
            elseif (is_front_page()):
                esc_html_e('Blog', 'wp-experts');
            /* single post */
            elseif (is_singular('post')):
                esc_html_e( 'Blog Single Post', 'wp-experts');
            /* search */
            elseif (is_search()):
                printf( esc_html__( 'Search Results for: %s', 'wp-experts' ), '<span>' . get_search_query() . '</span>' );
            /* 404 */ 
            elseif (is_404()):
                esc_html_e( 'Error Page', 'wp-experts');
            /* other */
            else :
                the_title();
            endif;
        } else { 
            /* category. */
            if ( is_category() ) :
                single_cat_title();
            elseif ( is_tag() ) :
            /* tag. */
                single_tag_title();
            /* author. */
            elseif ( is_author() ) :
                printf( esc_html__( 'Author: %s', 'wp-experts' ), '<span class="vcard">' . get_the_author() . '</span>' );
            /* date */
            elseif ( is_day() ) :
                printf( esc_html__( 'Day: %s', 'wp-experts' ), '<span>' . get_the_date() . '</span>' );
            elseif ( is_month() ) :
                printf( esc_html__( 'Month: %s', 'wp-experts' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'wp-experts' ) ) . '</span>' );
            elseif ( is_year() ) :
                printf( esc_html__( 'Year: %s', 'wp-experts' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'wp-experts' ) ) . '</span>' );
            /* post format */
            elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
                esc_html_e( 'Asides', 'wp-experts' );
            elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) :
                esc_html_e( 'Galleries', 'wp-experts');
            elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
                esc_html_e( 'Images', 'wp-experts');
            elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
                esc_html_e( 'Videos', 'wp-experts' );
            elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
                esc_html_e( 'Quotes', 'wp-experts' );
            elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
                esc_html_e( 'Links', 'wp-experts' );
            elseif ( is_tax( 'post_format', 'post-format-status' ) ) :
                esc_html_e( 'Statuses', 'wp-experts' );
            elseif ( is_tax( 'post_format', 'post-format-audio' ) ) :
                esc_html_e( 'Audios', 'wp-experts' );
            elseif ( is_tax( 'post_format', 'post-format-chat' ) ) :
                esc_html_e( 'Chats', 'wp-experts' );
            /* woocommerce */
            elseif (function_exists('is_woocommerce') && is_woocommerce()):
                woocommerce_page_title();
            else :
            /* other */
                the_title();
            endif;
        }
    }
    /**
     * Breadcrumb
     * 
     * @since 1.0.0
     */
    public static function wp_experts_get_breadcrumb($separator = '') {
        global $smof_data, $post;
        echo '<ul class="breadcrumbs">';
        /* not front_page */
        if ( !is_front_page() ) {
            echo '<li><a href="';
            echo esc_url(home_url('/'));
            echo '">';
            echo "</a></li>";
        }
    
        $params['link_none'] = '';
    
        /* category */
        if (is_category()) {
            $category = get_the_category();
            $ID = $category[0]->cat_ID;
            echo is_wp_error( $cat_parents = get_category_parents($ID, TRUE, '', FALSE ) ) ? '' : '<li>'.$cat_parents.'</li>';
        }
        /* tax */
        if (is_tax()) {
            $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
            $link = get_term_link( $term );
            	
            if ( is_wp_error( $link ) ) {
                echo sprintf('<li>%s</li>', $term->name );
            } else {
                echo sprintf('<li><a href="%s" title="%s">%s</a></li>', $link, $term->name, $term->name );
            }
        }
        /* home */
        
        /* page not front_page */
        if(is_page() && !is_front_page()) {
            $parents = array();
            $parent_id = $post->post_parent;
            while ( $parent_id ) :
            $page = get_page( $parent_id );
            if ( $params["link_none"] )
                $parents[]  = get_the_title( $page->ID );
            else
                $parents[]  = '<li><a href="' . esc_url(get_permalink( $page->ID )) . '" title="' . get_the_title( $page->ID ) . '">' . get_the_title( $page->ID ) . '</a></li>' . $separator;
            $parent_id  = $page->post_parent;
            endwhile;
            $parents = array_reverse( $parents );
            echo join( '', $parents );
            echo '<li>'.get_the_title().'</li>';
        }
        /* single */
        if(is_single()) {
            $categories_1 = get_the_category($post->ID);
            if($categories_1):
            foreach($categories_1 as $cat_1):
            $cat_1_ids[] = $cat_1->term_id;
            endforeach;
            $cat_1_line = implode(',', $cat_1_ids);
            endif;
            if( isset( $cat_1_line ) && $cat_1_line ) {
                $categories = get_categories(array(
                    'include' => $cat_1_line,
                    'orderby' => 'id'
                ));
                if ( $categories ) :
                foreach ( $categories as $cat ) :
                $cats[] = '<li><a href="' . esc_url(get_category_link( $cat->term_id )) . '" title="' . $cat->name . '">' . $cat->name . '</a></li>';
                endforeach;
                echo join( '', $cats );
                endif;
            }
            echo '<li>'.esc_html__('Single Post','wp-experts').'</li>';
        }
        /* tag */
        if( is_tag() ){ echo '<li>'."Tag: ".single_tag_title('',FALSE).'</li>'; }
        /* search */
        if( is_search() ){ echo '<li>'.esc_html__("Search", 'wp-experts').'</li>'; }
        /* date */
        if( is_year() ){ echo '<li>'.get_the_time('Y').'</li>'; }
        /* 404 */
        if( is_404() ) {
            echo '<li>'.esc_html__("404 - Page not Found", 'wp-experts').'</li>';
        }
        /* archive */
  		if( is_archive() && is_post_type_archive() ) {
  		    $title = post_type_archive_title( '', false );
  		    echo '<li>'. $title .'</li>';
  		}
        echo "</ul>";
    }
    
    /**
     * Get Shortcode From Content
     * 
     * @param string $shortcode
     * @param string $content
     * @return unknown
     */
    public static function wp_experts_get_shortcode_from_content($shortcode = '', $content = ''){
        
        preg_match("/\[".$shortcode."(.*)/", $content , $matches);
        
        return !empty($matches[0]) ? $matches[0] : null ;
    }
    
    /**
     * set google font for selecter.
     * 
     * @param array $googlefont
     * @param string $selecter
     */
    public static function wp_experts_set_google_font($googlefont = array(), $selecter = ''){
        
        if(isset($googlefont['font-family'])){
             /* add font selecter */
            if($selecter){
                echo esc_attr($selecter)."{font-family:'".esc_attr($googlefont['font-family'])."';}";
            }
        }
        if(isset($googlefont['font-weight']) && ($googlefont['font-weight']!='')){
            /* add font selecter */
            if($selecter){
                echo esc_attr($selecter)."{font-weight:".esc_attr($googlefont['font-weight']).";}";
            }
        }

    }
    
    /**
     * minimize CSS styles
     *
     * @since 1.1.0
     */
    public static function wp_experts_compress_css($buffer){
    
        /* remove comments */
        $buffer = preg_replace("!/\*[^*]*\*+([^/][^*]*\*+)*/!", "", $buffer);
        /* remove tabs, spaces, newlines, etc. */
        $buffer = str_replace("	", " ", $buffer); //replace tab with space
        $arr = array("\r\n", "\r", "\n", "\t", "  ", "    ", "    ");
        $rep = array("", "", "", "", " ", " ", " ");
        $buffer = str_replace($arr, $rep, $buffer);
        /* remove whitespaces around {}:, */
        $buffer = preg_replace("/\s*([\{\}:,])\s*/", "$1", $buffer);
        /* remove last ; */
        $buffer = str_replace(';}', "}", $buffer);
    
        return $buffer;
    }
    /* RevSlider */
    public function wp_experts_build_shortcode_rev_slider()
    {
        if (class_exists('RevSlider')) {

            $slider = new RevSlider();
            $arrSliders = $slider->getArrSliders();

            $revsliders = array(''=>'');
            if ($arrSliders) {
                foreach ($arrSliders as $slider) {
                    /* @var $slider RevSlider */
                    $revsliders[$slider->getAlias()] = $slider->getTitle();
                }
            } else {
                $revsliders[__('No sliders found', 'wp-experts')] = 0;
            }
        return $revsliders;
        }
    }
}