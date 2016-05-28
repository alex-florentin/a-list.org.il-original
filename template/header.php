<header class="sticky">
	<script src="<?php bloginfo('template_url') ?>/js/jquery.min.js"></script>
	<div class="top-bar">
		<div class="container">
			<div class="social-icons">
				<form method="get" action="http://fb.com" target="_blank" class="facebook-page">
				    <button type="submit"><i class="fa fa-facebook"></i></button>
				</form>

				<button type="button" name="share" id="share-box-toggle"> <i class="fa fa-share-alt"></i></button>

				<div id="hidden-share-box">
						<div class="share-facebook">
							<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_home_url(); ?>" target="_blank">Share on <i class="fa fa-facebook"></i></a>
						</div>
						<div class="share-twitter">
							<a href="https://twitter.com/home?status=<?php echo get_home_url(); ?>" target="_blank">Share on <i class="fa fa-twitter"></i></a>
						</div>
						<div class="share-linkedin">
							<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_home_url(); ?>/&title=A-List&summary=&source=" target="_blank">Share on <i class="fa fa-linkedin"></i></a>
						</div>
						<div class="share-whatsapp">
							<a href="whatsapp://send?text=<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] ?>" data-action="share/whatsapp/share" target="_blank">Share on <i class="fa fa-whatsapp"></i></a>
						</div>
				</div>

			</div> <!-- social-icons -->
		<button class="toggle-menu-button"><i class="fa fa-bars"></i></button>
    <nav id="main-menu">
    	<?php
			$defaults = array(
				'theme_location'  => 'main-menu',
				'menu'            => '',
				'container'       => '',
				'container_class' => '',
				'container_id'    => '',
				'menu_class'      => '',
				'menu_id'         => '',
				'echo'            => true,
				'fallback_cb'     => 'wp_page_menu',
				'before'          => '',
				'after'           => '',
				'link_before'     => '<span>',
				'link_after'      => '</span>',
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'depth'           => 0,
				'walker'          => ''
			);
			$defaults2 = array(
				'theme_location'  => 'logged-menu',
				'menu'            => 'logged menu',
				'container'       => '',
				'container_class' => '',
				'container_id'    => '',
				'menu_class'      => '',
				'menu_id'         => '',
				'echo'            => true,
				'fallback_cb'     => 'wp_page_menu',
				'before'          => '',
				'after'           => '',
				'link_before'     => '<span>',
				'link_after'      => '</span>',
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'depth'           => 0,
				'walker'          => ''
			);
			if($_SESSION["user_id"]==""){
				wp_nav_menu( $defaults );
			}else{
				wp_nav_menu( $defaults2 );
			}
			?>
		</nav>
		<!-- headerz -->
		</div> <!-- container -->
	</div> <!-- top-bar -->
	<div class="bottom-bar">
		<div class="container">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
				<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="a-list logo" />
			</a>
			<div class="search-box">
        	<?
			$page=get_page_by_title("Main Search");
			$link=get_site_url()."/?page_id=".$page->ID;
			?>
				<form method="POST" class="search-form" action="<?= $link ?>">
					<input class="search-input" type="text"  placeholder="חיפוש חופשי" name="search_box">
					<button class="search-button" type="submit"><i class="fa fa-search"></i></button>
				</form>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><button class="cat-button">חיפוש לפי תחום</button></a>			</div> <!-- search-box -->
		</div> <!-- container -->
	</div> <!-- bottom-bar -->
</header>