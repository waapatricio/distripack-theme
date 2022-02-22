<?php
	$header_main_text = grano_get_option('header_main_text', 'dark');
	extract( $args );
?>
<div class="desktop-header header4 d-none d-lg-block">	
	<?php grano_promo_block(); ?>
	<?php grano_header_topbar(); ?>

	<div class="main-header text-<?php echo esc_attr($header_main_text); ?>">
		<div class="container">
			<div class="main-header-content">
				<div class="row">
					<div class="col col-2 col-logo">
						<div id="_desktop_logo_">
							teste
						</div>
					</div>
					<div class="col col-7 text-center">
						<?php grano_header_search(); ?>
					</div>
					<div class="col col-3 col-header-icon text-right">
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
		<div class="top-menu menu-background <?php echo grano_header_sticky(); ?>">
			<div class="container">
				<div class="row">
					<div class="col col-ver ">
						<div class="vertical-menu">
							<?php grano_vertical_menu(); ?>
						</div>
					</div>
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
	</div>

</div>