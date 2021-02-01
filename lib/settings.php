<div class="wrap">
    <h2><?php echo esc_html( __( 'OTP Login Settings', 'text_domain' ) ); ?></h2>
	<div id="otpl-tab-menu">
	<a id="otpl-general" class="otpl-tab-links active" ><?php echo esc_html( __( 'General', 'text_domain' ) ); ?></a> 
	<a  id="otpl-support" class="otpl-tab-links"><?php echo esc_html( __( 'Support', 'text_domain' ) ); ?></a>
	<a  id="otpl-other" class="otpl-tab-links"><?php echo esc_html( __( 'Our Other Plugins', 'text_domain' ) ); ?></a></div>
	
    <form method="post" action="options.php" id="otpl-option-form"> 
      <?php settings_fields('otpl'); ?>
        <div class="otpl-setting">
			<!-- General Setting -->	
			<div class="first otpl-tab" id="div-otpl-general">
				<table class="form-table">  
				<tr>
				<td style="vertical-align:top;"><table>
					<tr valign="top">
						<th width="10"><input type="checkbox" value="1" name="otpl_enable" id="otpl_enable" <?php checked(get_option('otpl_enable'),1); ?> /> <label for="otpl_enable"><?php echo esc_html( __( 'Enable OTP Login', 'text_domain' ) ); ?></label></th>
					</tr>
					<tr valign="top">
						<th><label for="otpl_redirect_url"><?php echo esc_html( __( 'Redirect URL', 'text_domain' ) ); ?></label><input type="text" value="<?php echo get_option('otpl_redirect_url'); ?>" name="otpl_redirect_url" id="otpl_redirect_url"  size="40"/><em><?php echo esc_html( __( 'define redirect url after logged in user', 'text_domain' ) ); ?></em></th>
					</tr>
					<tr><td><?php @submit_button(); ?></td></tr>
					</table>
					</td>
					
					</tr>
				</table>
				<hr>
				<h3><?php echo esc_html( __( 'Login Popup Class Name:', 'text_domain' ) ); ?></h3>
				<p><strong><?php echo esc_html( __( 'otpl-popup', 'text_domain' ) ); ?></strong><?php echo esc_html( __( ' using this class your can add OTP login popup on your website', 'text_domain' ) ); ?></p>
				<?php echo esc_html( __( 'Exmaple:', 'text_domain' ) ); ?>
				<code><?php echo esc_html( __( '&lt;div class="otpl-popup"&gt;&lt;a href="javascript:"&gt;Login&lt;/a&gt;&lt;/div&gt;', 'text_domain' ) ); ?></code>
			</div>

			<div class="last otpl-tab" id="div-otpl-other">
				<h2><?php echo esc_html( __( 'Our Other Support', 'text_domain' ) ); ?></h2>
				<p>
				 
				</p>
			</div>
		</div>
    </form>
</div>
