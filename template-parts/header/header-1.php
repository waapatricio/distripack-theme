<?php
	$header_main_text = grano_get_option('header_main_text', 'dark');
	extract( $args );
	$wishlist_class = 'has-wishlist';
	if(! class_exists( 'YITH_WCWL' )) { 
		$wishlist_class ='no-wishlist';
	}
?>

<div class="desktop-header header1 has-btn-extra d-none d-lg-block">	
	<?php grano_promo_block(); ?>
	<?php grano_header_topbar(); ?>
	<div class="main-header text-<?php echo esc_attr($header_main_text); ?>">
		<div class="container">
			<div class="main-header-content">
				<div class="row">
					<div class="col col-xl-2 col-lg-3 col-logo">
						<?php if($vertical_menu && has_nav_menu('vertical')): ?>
							<div class="button-show-menu">
								<i class="icon-rt-bars-solid"></i>
								<i class="icon-rt-close-outline"></i>
							</div>
						<?php endif; ?>
						<div id="_desktop_logo_">
							teste
							
						</div>
					</div>
					<div class="col col-xl-7 col-lg-6 text-center">
						<?php grano_header_search(); ?>
					</div>
					<div class="col col-xl-3 col-lg-3 col-header-icon text-right">
						<?php grano_header_account(); ?>
						<div id="_desktop_wishlist_" class="<?php echo esc_attr($wishlist_class); ?>">
							<?php grano_wishlist(); ?>
						</div>
						<?php if(is_woocommerce_activated()) : ?>
							<?php grano_header_cart(); ?>
						<?php endif ?>
					</div>
				</div>
			</div>
		</div>
		<div class="top-menu menu-background <?php echo grano_header_sticky(); ?>">
			<div class="container">
				<div class="row">
					<div class="col col-hoz ">
						<div class="main-menu">
							<div id="_desktop_menu_">
								<?php grano_main_menu(); ?>
							</div>
						</div>
					</div>
					<div class="col col-contact ">
						<div id="_desktop_header_contact_">
							<?php grano_header_contact(); ?>
						</div>
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