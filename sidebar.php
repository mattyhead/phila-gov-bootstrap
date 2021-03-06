				<div id="sidebar1" class="col-sm-6" role="complementary">
				
					<?php
						$menu_location = 'sidebar';
						$menu_locations = get_nav_menu_locations();
						$menu_object = (isset($menu_locations[$menu_location]) ? wp_get_nav_menu_object($menu_locations[$menu_location]) : null);
						$menu_name = (isset($menu_object->name) ? $menu_object->name : '');

						echo esc_html($menu_name);
					?>
					
					<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

						<?php dynamic_sidebar( 'sidebar1' ); ?>

					<?php else : ?>

						<!-- This content shows up if there are no widgets defined in the backend. -->
						
						<div class="alert alert-message">
						
							<p><?php _e("Please activate some Widgets","wpbootstrap"); ?>.</p>
						
						</div>

					<?php endif; ?>

				</div>