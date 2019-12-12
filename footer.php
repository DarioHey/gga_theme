<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package CMSSuperHeroes
 * @subpackage CMS Theme
 * @since 1.0.0
 */
?>
<?php wp_experts_footer(); ?>

<script>
jQuery(document).ready(function(){
 jQuery('.cms-top-social a').attr('target', '_blank');
 jQuery('.cms-footer-social a').attr('target', '_blank');

 jQuery('.top-button').click(function(){
	jQuery("#contactModal").modal('show');
 });

jQuery('.btninv a').click(function(){
	jQuery("#contactModal").modal('show');
});

});	
</script>

<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModal" style="margin-top:50px;" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="border:none;">
        <a href="#" class="subscribe-close">
          <img style="width:20px; margin: 5px;" data-dismiss="modal" src="<?php echo get_site_url(); ?>/wp-content/uploads/2016/06/closebutton.png" alt="">
        </a>
	<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2018/05/GalenGrowthAsia.png" class='pull-left' style="width:150px; height: auto;" />	
        <h4 class="modal-title pull-left"   id="myModalLabel">Subscribe to our news</h4>
	<div class='clearfix'></div>
	<p style="margin: 0 0 5px;"></p>
	
      </div>
      <div class="modal-body" style="padding-top:0px;">
	<p style="margin:0 0 10px 0; padding-left:0;">Join Asia's HealthTech community and sign up.</p>	
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Subscribe Widget') ) : ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>

<!-- Start of HubSpot Embed Code -->
  <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/3944817.js"></script>
<!-- End of HubSpot Embed Code -->

</body>
</html>
