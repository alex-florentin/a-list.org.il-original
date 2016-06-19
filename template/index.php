<? @session_start(); ?><!DOCTYPE html><html <?php language_attributes(); ?>><head><meta charset=<?php bloginfo( 'charset' ); ?>><title>מומחים ומומחיות ערבים</title><meta property=og:title content="מומחים ומומחיות ערבים" /><meta name=description content="A-list הוא מאגר מקוון של מומחים ומומחיות ערבים המיועד לכלי התקשורת בישראל, במטרה להתגבר על חלק מהחסמים האובייקטיביים העומדים בפני ייצוג החברה הערבית בתקשורת העברית.  המאגר כולל מיפוי מתעדכן ודינמי במגוון תחומי התמחות, מחקר ועשייה, הרלוונטיים לסדר יום התקשורתי, במטרה להביא לנוכחות אזרחית מגוונת, עשירה ומייצגת לכלל האזרחים במדינה."><meta property="og:image" content="http://alexflorentin.com/project/alist/wp-content/themes/alist_template_v2/img/fb_cacat.jpg" /><meta name=viewport content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"><link rel=pingback href=<?php bloginfo( 'pingback_url' ); ?>><link rel=stylesheet href=<?php bloginfo('template_directory'); ?>/css/style.css><?php do_action('wp_head'); ?></head><body ><header class="normal-header"><script src="<?php bloginfo('template_url') ?>/js/jquery.min.js"></script>	<div class="top-bar">		<div class="container">			<div class="social-icons">				<form method="get" action="http://fb.com" target="_blank" class="facebook-page">				    <button type="submit"><i class="fa fa-facebook"></i></button>				</form>				<button type="button" name="share" id="share-box-toggle"> <i class="fa fa-share-alt"></i></button>				<div id="hidden-share-box">						<div class="share-facebook">							<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_home_url(); ?>" target="_blank">Share on <i class="fa fa-facebook"></i></i></a>						</div>						<div class="share-twitter">							<a href="https://twitter.com/home?status=<?php echo get_home_url(); ?>" target="_blank">Share on <i class="fa fa-twitter"></i></a>						</div>						<div class="share-linkedin">							<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_home_url(); ?>/&title=A-List&summary=&source=" target="_blank">Share on <i class="fa fa-linkedin"></i></a>						</div>						<div class="share-whatsapp">							<a href="whatsapp://send?text=<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] ?>" data-action="share/whatsapp/share" target="_blank">Share on <i class="fa fa-whatsapp"></i></a>						</div>				</div>			</div> <!-- social-icons -->		<button class="toggle-menu-button"><i class="fa fa-bars"></i></button>    <nav id="main-menu">    	<?php			$defaults = array(				'theme_location'  => 'main-menu',				'menu'            => '',				'container'       => '',				'container_class' => '',				'container_id'    => '',				'menu_class'      => '',				'menu_id'         => '',				'echo'            => true,				'fallback_cb'     => 'wp_page_menu',				'before'          => '',				'after'           => '',				'link_before'     => '<span>',				'link_after'      => '</span>',				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',				'depth'           => 0,				'walker'          => ''			);			$defaults2 = array(				'theme_location'  => 'logged-menu',				'menu'            => 'logged menu',				'container'       => '',				'container_class' => '',				'container_id'    => '',				'menu_class'      => '',				'menu_id'         => '',				'echo'            => true,				'fallback_cb'     => 'wp_page_menu',				'before'          => '',				'after'           => '',				'link_before'     => '<span>',				'link_after'      => '</span>',				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',				'depth'           => 0,				'walker'          => ''			);			if($_SESSION["user_id"]==""){				wp_nav_menu( $defaults );			}else{				wp_nav_menu( $defaults2 );			}			?>		</nav>		<!-- headerz -->		</div> <!-- container -->	</div> <!-- top-bar -->	<div class="bottom-bar">		<div class="container">			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">				<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="a-list logo" class="logo-img"/>			</a>			<div class="search-box">        	<?			$page=get_page_by_title("Main Search");			$link=get_site_url()."/?page_id=".$page->ID;			?>				<form role="searchform" method="POST" class="search-form" action="<?= $link ?>">					<input class="search-input" type="text"  placeholder="חיפוש חופשי" name="search_box">					<button class="search-button" type="submit"><i class="fa fa-search"></i></button>				</form>				<div class="cat-button">חיפוש לפי תחום					<div class="categories-wrapper">								<div class="h-categories">									<div class="container">									<?									$page=get_page_by_title("Search Page");									$link= get_site_url()."/?page_id=".$page->ID;									?>										<form name="header_form" id="header_form" method="POST" action="<?= $link ?>" >											<ul>													<?												global $wpdb;												$rows=$wpdb->get_results("Select * from wp_category_table where `status`='A'");												$cat=$_POST["cat"];												foreach($rows as $row){													if(substr_count($cat,$row->id)>0){													//echo $row->id."<br />".$cat."<br />";													$class="class='active-item'";													}else {														$class="";														}														echo "<li $class id='header_check_".$row->id."'><a onClick='javascript:SetVal(".$row->id.")' href='#'>".$row->name."</a>														</li>";														echo "<script>$(document).ready(function(){															$('#header_check_".$row->id."').click(function(){														$('#header_check_".$row->id."').toggleClass('active-item');															});														});														</script>														";													}												?>												<input type='hidden' name='cat' id='cat' value="<?= $_POST["cat"]?>" />												<script>													function SetVal(temp){														var val= document.getElementById("cat").value;														var res= val.indexOf(temp);														if(res==-1){															document.getElementById("cat").value += temp+",";														}else{															var new1=val.replace(temp,"0");															document.getElementById("cat").value= new1;														}														GetProfile();														}												</script>											</ul>										</form>									</div>								</div>						</div>				</div> <!-- cat-hover -->			</div> <!-- search-box -->		</div> <!-- container -->	</div> <!-- bottom-bar --></header><script>	$(function() {	    var header = $(".normal-header");	    var container = $(".margin-xs");		 var hcategories = $(".h-categories");		 var windowWidth = $(window).width();	    $(window).scroll(function() {	        var scroll = $(window).scrollTop();	        if (scroll >= 85) {	            header.removeClass('normal-header').addClass("sticky-header");					container.addClass('margin-xs-a');					if(windowWidth < 768){						hcategories.css('top', '52px');					} else {						hcategories.css('top', '70px');					}	        } else {	            header.removeClass("sticky-header").addClass('normal-header');					container.removeClass("margin-xs-a");					if(windowWidth < 768){						hcategories.css('top', '136px');					} else {						hcategories.css('top', '96px');					}	        }	    });	});</script><div class="slider"><?php masterslider(1); ?></div><main class="container profiles margin-xs" id="main_container">	<div id=content class=row>		<?require_once("pager.php");			global $wpdb;			$rows_q=$wpdb->get_results("Select * from wp_people_table where `status`='A' and `public_profile`='Y' order by order_number asc");			$rows_count = $wpdb->num_rows;			$limit=20;				$p = new Pager;				$start = $p->findStart($limit);				$pages = $p->findPages($rows_count, $limit);				if($rows_count)				{						if($_GET['page']=='' || $_GET['page']==1)				{					$i=1;				}				else				{					$i=$limit*($_GET['page']-1)+1;				}				$rows=$wpdb->get_results("Select * from wp_people_table where `status`='A' and `public_profile`='Y' limit $start,$limit");			foreach($rows as $row){			if(is_array(getimagesize(get_template_directory_uri()."/uploads/profile/size/".$row->profile_image))){			$page= get_page_by_title('Profile Page');			$link = get_site_url()."/profile-page/".$row->id;		?>		<a href=<?= $link ?> class="image-wrapper col-xs-12 col-sm-4 col-md-3 col-lg-3">			<span class=mask></span>			<img src=<?php echo get_template_directory_uri(); ?>/uploads/profile/size/<?= $row->profile_image?> class="grayscale">			<div class="name-and-title">				<div class=name><?= stripslashes($row->prefix)." ".stripslashes($row->name)." ".stripslashes($row->last_name) ?></div>				<span class=title><?= stripslashes($row->position)?></span>			</div>		</a>		<? } }			}else{				echo 'No Record Found';			}?>	</div><div id="pagination_num"><?php  $p = new Pager; $start = $p->findStart($limit); $pagelist = $p->pageList($_GET['page'],$pages,""); print "$pagelist"; ?></div>	<div class="get-in-touch" style="direction: rtl">		<p>			צריכים עזרה בחיפוש מומחים?		</p>		<a href="/צרו-קשר/"> צרו עימנו קשר</a>	</div></main><div class="loader">	<i class="fa fa-cog fa-spin fa1"></i>	<i class="fa fa-cog fa-spin fa2"></i></div><div class=featured>	<div class=title><button class=luci>על הפרק <i class="fa fa-star"></i></button></div>	<div class=content>	<div class=text-place>	<?php dynamic_sidebar( 'text-featured-panel' ); ?>	</div>		<div id=yogendra>			<?			global $wpdb;			$rows=$wpdb->get_results("Select * from ".$GLOBALS["wpdb"]->prefix."people_table where `status`='A' and `featured`='Y'");			foreach($rows as $row){			if(is_array(getimagesize(get_template_directory_uri()."/uploads/profile/size/".$row->profile_image))){			$page= get_page_by_title('Profile Page');			$link = get_site_url()."/profile-page/".$row->id;			?>			<a href="<?= $link ?>" class="image-wrapper col-xs-12 col-sm-6 col-md-6 col-lg-4">				<span class=mask></span>				<img src=<?php echo get_template_directory_uri(); ?>/uploads/profile/size/<?= $row->profile_image?> class="grayscale">				<div class=name><?= stripslashes($row->prefix)." ".stripslashes($row->name)." ".stripslashes($row->last_name) ?></div>				<span class=prefix-title><?= stripslashes($row->position)?></span>			</a>			<? } } ?>		</div>	</div></div><?php include (TEMPLATEPATH . '/footer.php'); ?></body></html>