<?php
	$header_main_text = grano_get_option('header_main_text', 'light');
	extract( $args );
?>
<div class="desktop-header header2 has-btn-extra d-none d-lg-block">	
	<?php grano_promo_block(); ?>
	<?php grano_header_topbar(); ?>
	<div class="main-header text-<?php echo esc_attr($header_main_text); ?> <?php echo grano_header_sticky(); ?>">
		<div class="container">
			<div class="main-header-content">
				<div class="row">
					<div class="col col-2 col-logo">
						<?php if($vertical_menu && has_nav_menu('vertical')): ?>
							<div class="button-show-menu">
								<i class="icon-rt-bars-solid"></i>
								<i class="icon-rt-close-outline"></i>
							</div>
						<?php endif; ?>
						<div id="_desktop_logo_">
							<?php grano_site_logo(); ?>
						</div>
					</div>
					<div class="col col-6 col-menu text-left">
						<div class="top-menu menu-background ">
							
							<div class="row">
								<div class="col col-hoz ">
									<div class="main-menu">
										<div id="_desktop_menu_">
											<?php grano_main_menu(); ?>
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
					<div class="col col-4 col-header-icon text-right">
						<?php grano_header_search(); ?>
						<?php grano_header_account(); ?>
						<div id="_desktop_wishlist_">
							<?php grano_wishlist(); ?>
						</div>
						<?php if(is_woocommerce_activated()) : ?>
							<?php grano_header_cart(); ?>
						<?php endif ?>
					</div>
				</div>
			</div>
		</div>
		<?php if($vertical_menu && has_nav_menu('vertical')): ?>
			<div class="extra-menu">
				<div class="extra-menu-overlay"></div>
				<div class="inner">
					<div class="vertical-menu">
						<?php grano_vertical_menu(); ?>
					</div>
				</div>
			</div>
		<?php endif; ?>
	</div>
</div>
<script>
jQuery(document).ready(function(){
	jQuery('.extra-menu-overlay').click(function(e){
			 jQuery('.button-show-menu').removeClass('open');
			 jQuery('.extra-menu').removeClass('open');
	 });
	jQuery('.button-show-menu').click(function () {
		if(jQuery(this).hasClass('open')) {
			jQuery(this).removeClass('open');
			jQuery('.extra-menu').removeClass('open');
		} else {
			jQuery(this).addClass('open');
			jQuery('.extra-menu').addClass('open');
		}
	});
});
</script>