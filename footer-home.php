<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Oksana_T.
 */

?>

	</main><!-- #content -->

	<footer class="site-footer">
	    <div class="meta-block block-t">
	      <div class="wrapper">
	        <div class="block block-1-wide social">
	          <h3 class="block-title"><span>Follow</span> Oksana</h3>
	          <ul class="social-icons">
	            <li class="social-item">
	              <a href="https://www.linkedin.com/in/oksana-tanasiv-a9254b2b?trk=hp-identity-photo" target="_blank">
	                <span aria-hidden="true" class="icon fa-linkedin"></span>
	                <span class="hide-copy" aria-label="My Linkedin Account">  
	                  Linkedin
	                </span>
	              </a>
	            </li>
	            <li class="social-item">
	              <a href="https://twitter.com/tanasiv" target="_blank">
	                <span aria-hidden="true" class="icon fa-twitter"></span>
	                <span class="hide-copy" aria-label="My Twitter Account">  
	                  Twitter
	                </span>
	              </a>
	            </li>
	            <li class="social-item">
	              <a href="https://www.facebook.com/oksana.tanasiv" target="_blank"> 
	                <span aria-hidden="true" class="icon fa-facebook"></span>
	                <span class="hide-copy" aria-label="My Facebook Account">  
	                  Facebook
	                </span>
	              </a>
	            </li>
	            <li class="social-item">
	              <a href="https://www.pinterest.com/oksanatanasiv/" target="_blank">
	                <span aria-hidden="true" class="icon fa-pinterest-p"></span>
	                <span class="hide-copy" aria-label="My Pintrest Account">  
	                  Pintrest
	                </span>
	              </a>
	            </li>
	            <li class="social-item">
	              <a href="https://www.instagram.com/oksanat_art/" target="_blank">
	                <span aria-hidden="true" class="icon fa-instagram"></span>
	                <span class="hide-copy" aria-label="My Instagram Account">  
	                  Instagram
	                </span>
	              </a>
	            </li>
	          </ul>
	        </div>
	        <div class="block block-1-wide subscribe">
	          <h3 class="block-title"><span>Subscribe</span> to Newsletter</h3>
	          <div class="visual-form">	
	          	<input type="email" name="subscribe-email" placeholder="Email Address" />
	          </div>
	          <div class="real-form hide-form">
	          	<?php echo do_shortcode('[contact-form-7 id="165" title="Email Form"]'); ?>
	          	<?php // echo do_shortcode('[contact-form-7 id="261" title="Email Form"]'); ?>
	          </div>
	        </div>
	        <div class="block block-1-wide sponsor">
	          <h3 class="block-title"><span>Sponsor</span> the Artist</h3>
	          <div class="desc">
	            <p>
	              Oksana pours her soul into each work of aret, wheather it be Fashion art, Political art, or iconic art.
	            </p>
	            <p>
	              Becoming a sponsor will give you...
	            </p>
	            <a href="#" class="btn">Become a Sponsor</a>
	          </div>
	        </div>
	      </div>
	    </div>
	    <div class="legal-block">
	      <div class="wrapper">
	        <img src="<?php echo IMAGES; ?>/oksana-signature-sm.svg" alt="" class="signature">
	        <div class="legal-copy">&copy;copyright 2016. All Rights Reserved. Oksana T.</div>
	      </div>
	    </div>
	</footer>
	<!-- <div class="loader-wrapper">
		<div class="loader">
			Loading...
		</div>
	</div> -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
