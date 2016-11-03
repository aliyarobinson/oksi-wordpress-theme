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
				<form method="post" action="http://oi.vresp.com?fid=bcfc81e522" target="vr_optin_popup" onsubmit="window.open( 'http://www.verticalresponse.com', 'vr_optin_popup', 'scrollbars=yes,width=600,height=450' ); return true;" >
				  <div>
				    <label style="color: #4b4b4b;">Name:</label><span style="color: #f00">* </span>
				    <input name="Name"/>
				    <label>Email Address:</label><span style="color: #f00">* </span>
				    <input name="email_address"/>
					<div id="captchaPreview" class="field">
						<img id="vrCaptchaImage" src="https://img.verticalresponse.com/blank.gif" height="35" width="125" />
						<label id="captcha_text">Enter the letters shown above:</label>
						<span style="color: #f00">*</span>
						<span>
							<input size="10" name="captcha_guess"/>
						</span>
						<input type=hidden id="vrCaptchaHash" name="captcha_hash" value="">
					</div>
					<script>hex_chars=Array('0','1','2','3','4','5','6','7','8','9','a','b','c','d','e','f');hash='';hash_length=20;for(h=0;h<hash_length;h++){hash=hash+hex_chars[Math.floor(16*Math.random())];}document.getElementById('vrCaptchaHash').value=hash;captcha_image_url='https://captcha.vresp.com/produce/'+hash;document.getElementById('vrCaptchaImage').src=captcha_image_url;
					</script>    
					<input type="submit" value="Send"/>
				  </div>
				</form>
	          </div>
	        </div>
	        <div class="block block-1-wide sponsor">
	          <h3 class="block-title"><span>Sponsor</span> the Artist</h3>
	          <div class="desc">
	            <p>
	              Oksana pours her soul into each work of art, wheather it be Fashion art, Political art, or iconic art.
	            </p>
	            <p>
	              Click the link below to learn more about becoming a sponsor.
	            </p>
	            <a href="<?php echo THEMEROOT; ?>/sponsor-artist" class="btn">Learn More</a>
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
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
