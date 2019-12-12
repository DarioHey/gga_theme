<?php
/**
 * The template for displaying 404 pages (Not Found)
 * 
 * @package CMSSuperHeroes
 * @subpackage CMS Theme
 * @since 1.0.0
 */

get_header(); ?>


	
		<div class="row">

		<p><STYLE TYPE="text/css">
		STYLE="background-image: https://www.galengrowth.asia/wp-content/uploads/2016/03/gga_splash.jpg"
		</STYLE>
		</p>
			
				<div id="content" role="main" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<article id="post-0" class="post cms-error404 no-results not-found">
			

		
		<img src="https://www.galengrowth.asia/wp-content/uploads/2016/07/404_background.png" id="bg"; alt="">
		
<p>
</p>					
				<?header class="entry-header">	
				<?h3 class="ft-droid"><?php esc_html_e( '404 Page not found', "wp-experts" ); ?></h3>
			<?/header>	
					

<p>

			
</p>

<?php-------------------------Subscription-----------------?>

<p><strong>Sign up</strong> or why not reading our
<strong><span style="color: #149c00;"><a style="color: #149c00;" href="www.galengrowth.asia/news">news</a></span></strong>
</p>


<p>
  <input type="text" name="first_name" placeholder="First Name" required style="text-align:center; width:50%"/>
</p>
<p>
  <input type="text" name="last_name" placeholder="Last Name" required style="text-align:center; width:50%"/>
</p>
<p>
	<input type="email" name="email" placeholder="Your email address" required style="text-align:center; width:50%"/>
</p>
<p>
  	<input type="text" name="organization" placeholder="Organisation You Represent" required style="text-align:center; width:50%"/>
</p>
<p>
	<select name="category" placeholder="Category of Your Organisation" required="" aria-required="true" aria-		invalid="true" style="text-align:center; width:50%">
                  <option value="" disabled="" selected="">Category of Your Organisation</option>
                  <option value="Government">Government</option>
                  <option value="Investor">Investor</option>
                  <option value="Corporate">Corporate</option>
                  <option value="Media / Press / Conference">Media / Press / Conference</option>
                  <option value="Startup">Startup</option>
	</select>
</p>
<p>
  	<select name="location"  placeholder="Your Location" required="" aria-required="true" aria-invalid="true" style="text-align:center; width:50%">
                  <option value="" disabled="" selected="">Your Location</option>
                  <option value="Asia Pacific">Asia Pacific</option>
                  <option value="USA &amp; Canada">USA &amp; Canada</option>
                  <option value="South America">South America</option>
                  <option value="Middle East">Middle East</option>
                  <option value="Africa">Africa</option>
                  <option value="Europe">Europe</option>
  	 </select>
</p>
<p>

	<input type="submit" value="Sign up" class='pull-center'/>
</p>

  	<div class="clearfix">
	</div>

<div class="entry-content">
						<div class="text ft-droid"><?php echo wp_experts_cms_404_page(); ?></div>
						<a class="btn btn-default btn-lg" href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Back To Homepage','wp-experts'); ?></a>

					</div><!-- .entry-content -->

				</article><!-- #post-0 -->


			</div><!-- #content -->
		</div>
	</div><!-- #primary -->

<?php get_footer(); ?>