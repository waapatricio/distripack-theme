<div class="mobile-header main-header m-header-2 d-block d-lg-none">
	<div class="container">
		<div class="row">
			<div class="col col-5 col-header-mobile">
				<div class="menu-mobile">
					<a class="m-menu-btn"><i class="icon-rt-bars-solid"></i></a>
					
					<div id="menu-side" class="m-menu-side">
						<a class="side-close-icon"><i class="icon-rt-close-outline"></i></a>
						<div class="inner">
							<div class="box-language-mobile">
								<div id="_mobile_language_switcher_"></div>
								<div id="_mobile_currency_switcher_"></div>
							</div>
							<div id="_mobile_header_html1_" class="mobile-html"></div>
							<div id="_mobile_header_html2_" class="mobile-html"></div>
							
							
							<div class="rt-tabs-wrapper">
								<ul class="tabs rt-tabs" id="mobile_menu_tabs_title" role="tablist">
								  <li class="active">
									<a href="#hozmenu"><?php echo esc_html__('Menu', 'grano'); ?></a>
								  </li>
								  <?php if($vertical_menu && has_nav_menu('vertical')): ?>
								  <li class="">
									<a href="#vmenu"><?php echo esc_html__('Categories', 'grano'); ?></a>
								  </li>
								  <?php endif; ?>
								</ul>
								<div class="rt-tab-panel" id="hozmenu">
									
									<div id="_mobile_menu_" class="mobile-menu"></div>
									<div id="_mobile_topbar_menu_" class="mobile-topbar-menu"></div>
									<div id="_mobile_header_contact_" class="mobile-header-contact"></div>
									
								</div>
								<?php if($vertical_menu && has_nav_menu('vertical')): ?>
								<div class="rt-tab-panel" id="vmenu">
									<div id="_mobile_vmenu_" class="mobile-menu"></div>
								</div>
								<?php endif; ?>
							</div>
							
							
						</div>
					</div>
				</div>
				<?php grano_the_custom_logo_mobile(); ?>
			</div>
			
			<div class="col col-7 col-header-mobile right">
				<div  class="header-block search-block-mobile search-sidebar">
			        <button><i class="icon-rt-loupe" aria-hidden="true"></i></button>
			        <div class="search-wrapper" id="_mobile_search_block_">
			        </div>
			    </div>
				<div id="_mobile_header_account_"></div>
				<?php grano_header_cart_mobile(); ?>
				
			</div>
		</div>
	</div>
</div>