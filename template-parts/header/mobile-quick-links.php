<?php
	$quick_links = grano_get_option('quick_links', '');
	if(empty($quick_links)) return;
?>

<div class="mobile-bottom-toolbar">
	<div class="mobile-bottom-toolbar__inner">
	<?php foreach($quick_links as $link) : ?>
		<?php switch ($link['type_link']) {
			case 'wishlist': ?>
				<div id="_mobile_wishlist_"></div>
				<?php
				break;
			case 'page_link':
				$icon ='';
				if($link['page_link']) {
					$url = get_permalink( get_page_by_path( $link['page_link'] ) ); ?>
					<div class="page-link">
						<a href="<?php echo esc_url($url); ?>">
							<?php if($link['image']) : ?>
								<img src="<?php echo wp_get_attachment_url((int)$link['image']); ?>" alt="<?php echo esc_attr($link['custom_title']); ?>" />
							<?php else : ?>
								<?php if($link['icon']) : ?>
									<i class="icon-<?php echo esc_attr($link['icon']); ?>"></i>
								<?php endif; ?>
							<?php endif; ?>
							<span><?php echo get_the_title( get_page_by_path( $link['page_link'] )); ?></span>
							
						</a>
					</div>
				<?php
				}
				break;
			case 'custom_link':
				$icon ='';
				if($link['custom_title']) { ?>
					<div class="custom-link">
						<a href="<?php echo esc_url($link['custom_url']); ?>">
						<?php if($link['image']) : ?>
							<img src="<?php echo wp_get_attachment_url((int)$link['image']); ?>" alt="<?php echo esc_attr($link['custom_title']); ?>" />
						<?php else : ?>
							<?php if($link['icon']) : ?>
								<i class="icon-<?php echo esc_attr($link['icon']); ?>"></i>
							<?php endif; ?>
						<?php endif; ?>
						<span><?php echo esc_attr($link['custom_title']); ?></span>	
						</a>
					</div>
				<?php
				}
				break;
			default:
				break;
		} ?>

	<?php endforeach; ?>
	</div>
</div>