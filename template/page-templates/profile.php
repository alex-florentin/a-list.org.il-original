<?
/**
 * Template Name: Profile Page
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

 @session_start();
 ini_set("display_errors",'off');
 global $wpdb;
$page_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$last_pos =  strlen($page_url)-35;
$id=substr($page_url, 34, $last_pos);
//$id=$_GET["marked"];
 $row=$wpdb->get_row("Select * from wp_people_table where `id`='$id'");
foreach($row as $key=>$value){
	$row->$key = stripslashes($value);
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
      <meta charset="<?php bloginfo( 'charset' ); ?>">
      <title><?= $row->name." ".$row->last_name?></title>
      <meta property="og:title" content="<?php $str = $row->prefix." ".$row->name." ".$row->last_name." - ".$row->position; echo $str = str_replace('"','\'\'',$str); ?>" />
      <meta name="description" content="<?php $bio = $row->bio; echo $str = str_replace('"','\'\'',truncate($bio)); ?>">
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
      <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
      <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css">
      <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/uploads/profile/size/<?= $row->profile_image?>" />
      <meta property="og:description" content="<?php echo $str = str_replace('"','\'\'',truncate($bio)); ?>" />
      <?php do_action('wp_head'); ?>
    </head>


	<body>
      <header>
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
							<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_home_url(); ?>" target="_blank">Share on <i class="fa fa-facebook"></i></i></a>
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
      				<form role="searchform" method="POST" class="search-form" action="<?= $link ?>">
      					<input class="search-input" type="text" placeholder="חיפוש חופשי" name="search_box">
      					<button class="search-button" type="submit"><i class="fa fa-search"></i></button>
      				</form>
                  <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><button class="cat-button">חיפוש לפי תחום</button></a>
      			</div> <!-- search-box -->
      		</div> <!-- container -->
      	</div> <!-- bottom-bar -->
      </header>
    	<main class="container profile">
    		<div class="row">
    			<div class="right-side col-lg-4 col-md-4 col-sm-5 col-xs-12">
    				<div class="photo"><img src="<?php echo get_template_directory_uri(); ?>/uploads/profile/size/<?= $row->profile_image?>" class="grayscale"></div>
    				<div class="contact-info">
               <?php
                  if($row->facebook_link!=""){
                  ?>
                     <div class="facebook child"><a href="<?= $row->facebook_link ?>" target="_blank"><i class="fa fa-facebook"></i></a></div>
                  <?
                  } else {
                  ?>
                  <div class="facebook child"><a class="inactive-contact"><i class="fa fa-facebook"></i></a></div>
                  <?
                  }
               ?>
               <?php
                  if($row->twitter_link!=""){
                  ?>
                  <div class="twitter child"><a href="<?= $row->twitter_link ?>" target="_blank"><i class="fa fa-twitter"></i></a></div>
                  <? } else {
                  ?>
                  <div class="twitter child"><a class="inactive-contact"><i class="fa fa-twitter"></i></a></div>
                  <?
               }
               ?>
               <?php
                  if($row->linkdn_link!=""){
                  ?>
                  				<div class="linkedin child"><a href="<?= $row->linkdn_link ?>" target="_blank"><i class="fa fa-linkedin"></i></a></div>
               <? } else {
                  ?>
                  <div class="linkedin child"><a class="inactive-contact"><i class="fa fa-linkedin"></i></a></div>
                  <?
               }
               ?>
    					<div class="email child">
    						<button class="toggle-email"><i class="fa fa-envelope"></i></button>
    						<div class="hidden-email"><a href="mailto:myemail@domain.com?subject=feedback"><?= $row->email ?></a></div>
    					</div>
                  <?php
                  if($row->contact!=""){
                  ?>
                  <div class="phone child">
    						<button class="toggle-phone"><i class="fa fa-phone"></i></button>
                     <div class="hidden-phone"><?= $row->contact?></div>
                  </div>
               <? } else {
                  ?>
                  <div class="phone child">
    						<button class="toggle-phone inactive-contact"><i class="fa fa-phone"></i></button>
                  </div>
                  <?
               }
               ?>
    				</div> <!-- contact info -->
    				<div class="more-info">
    					<div class="languages_block">
    						<div class="languages">
    							<?
    								$language= explode(",",$row->language);
    								foreach($language as $temp){
    		                echo  "<div class='lang'>".$temp."</div> ";
    								}
    							?>
    						</div>
    						<div class="languages_icon">שפות <i class="fa fa-language"></i></div>
    					</div>
    					<div class="living-area_block">
    						<div class="living-area"><?= $row->area?></div>
    						<div class="living-area_icon">אזור מגורים <i class="fa fa-map-signs"></i></div>
    					</div>
    					<div class="city_block">
    						<div class="city"><?= $row->city?></div>
    						<div class="city_icon">ישוב <i class="fa fa-map-marker"></i></div>
    					</div>
    				</div> <!-- more info -->
<?php
if($row->cv!=""){
?>
				<div class="curriculum-download">
    					<a href="<?= get_template_directory_uri()?>/uploads/cv/<?= $row->cv?>" target="_blank" download>קורות חיים להורדה</a>
    				</div> <!-- curriculum-download -->
<? } ?>
<div class="share-box">
   <div class="share-whatsap">
      <a href="whatsapp://send?text=<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] ?>" data-action="share/whatsapp/share" target="_blank">Share <?= $row->name ?> profile <i class="fa fa-whatsapp"></i>
</a>
   </div>
   <div class="share-facebook">
      <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] ?>" target="_blank">Share <?= $row->name ?> profile <i class="fa fa-facebook-square"></i>
</i>
</a>
   </div>
</div>
</div> <!-- right side -->
    			<div class="left-side col-lg-8 col-md-8 col-sm-7 col-xs-12">
    				<div class="name-title-bio">
    					<h2 class="name"><?= $row->prefix. " " .$row->name." ".$row->last_name ?></h2>
    					<div class="title">
    						<?= $row->position?>
    					</div>
    					<div class="bio">
                     <div class="show-more-snippet">
                     <?= stripslashes(nl2br($row->bio))?>
                     </div>
                     <a href="#more" class="show-more">עוד</a>
    					</div>
               <script>
               $('.show-more').click(function() {
                   if($('.show-more-snippet').css('height') != '90px'){
                       $('.show-more-snippet').stop().animate({height: '90px'}, 200);
                       $(this).text('עוד');
                   }else{
                       $('.show-more-snippet').css({height:'100%'});
                       var xx = $('.show-more-snippet').height();
                       $('.show-more-snippet').css({height:'90px'});
                       $('.show-more-snippet').stop().animate({height: xx}, 400);
                       $(this).text('פחות');
                   }
               });
               </script>
    				</div> <!-- bio -->
    				<div class="categories">
    					<div class="move-right">
                        	<?
    							$cat= explode(",",$row->expertise);
    							foreach($cat as $temp){
    								if($temp!=0){
    									$page=get_page_by_title("Category Page");
    									$link= get_site_url()."/?page_id=".$page->ID."&marked=".$temp;
    									$name=$wpdb->get_var("Select name from wp_category_table where `id`='$temp'");
    									echo "<a href='".$link."' class='category'>$name</a>";
    								}
    							}
    						?>
    					</div>
    				</div> <!-- categories -->
    				<div class="text-boxes row">
                  <?php
                  if($row->more_expertise!=""){
                  ?>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <div class="text-box">
    							<h2 class="title">תחומי התמחות</h2><!-- areas of expertise -->
    							<div class="caption"><?= nl2br($row->more_expertise)?></div>
    						</div>
                  </div>
                  <? } ?>
                  <?php
                  if($row->what_drives_me!=""){
                  ?>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
    						<div class="text-box">
    							<h2 class="title">מה מניע אותי?</h2><!-- what motivates me? -->
    							<div class="caption"><?= nl2br($row->what_drives_me)?></div>
    						</div>
    					</div> <!-- what drives me -->
                  <? } ?>
    				</div>
    				<div class="youtube-and-media row">
                  <?php
                  if($row->link!=""){
                  ?>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 media">
    						<div class="media-links">
                        <div class="title">
                           פרסומים בתקשורת
                        </div>
    							<?
    								$title=explode(";",$row->title);
    								$link=explode(",",$row->link);
    								for($i=0; $title[$i]!="" ; $i++){
    									echo "<a href='".$link[$i]."' class='media' target='_blank'>".$title[$i]."</a>";
    								}
    							?>
    						</div>
    					</div>
                  <? } ?>
                     <?php
                        if($row->youtube!=""){
                        ?>
                           <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 youtube">
                              <div class="youtube-video">
             							<div class="embed-responsive embed-responsive-16by9">
                                 <?
             								$youtube_id=end(explode("v=",$row->youtube));
             							?>
             								<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $youtube_id ?>?showinfo=0&rel=0" frameborder="0"></iframe>
             							</div>
             						</div>
                           </div>
                     <? } ?>
    				</div>
    				<div class="recommend-use_block">
    					<button class="recommend-use">היית רוצה להמליץ על המשתמש?</button> <!-- wold you recommend use? -->
    					<div class="recommend_form">
    						<form name="form" action="<?= get_template_directory_uri(); ?>/codes/recemond.php" method="POST" >
    						<input type="hidden" name="expert_id" value="<?= $id?>" />
    						<input name="recommender_name" type="text" class="recommender_name" placeholder="שֵׁם">
    						<textarea name="recommender_message" rows="3" class="recommender_message" placeholder="ממליץ במשתמש"></textarea>
    						<input type="submit" class="recommend_submit" value="שליחה">
    						</form>
    					</div>
    				</div>
                    <div class="recommendations_block">
    					<div class="title">המלצות</div> <!-- recommendations -->
    						<?
    						if($_SESSION["user_id"]!=$id){
    						$rows=$wpdb->get_results("Select * from ".$GLOBALS['wpdb']->prefix."expert_comments where `status`='A' and `showit`='S' and `expert_id`= '$id' order by `id` DESC");
    							foreach($rows as $row){
    								echo "<div class='recommendation'>
    							<div class='name'>".$row->name."</div>
    							<div class='message'>
    							". $row->comment ."
    							</div>
    							</div>";
    							}
               				}
               				else{
    						$rows=$wpdb->get_results("Select * from ".$GLOBALS['wpdb']->prefix."expert_comments where `status`='A' and `expert_id`= '$id' order by `id` DESC");
    							foreach($rows as $row){
    								echo "<div class='recommendation'>
    							<div class='name'>".$row->name."</div>
    							<div class='message'>
    							". $row->comment ."
    							</div>";
    							if($row->showit!="S"){
    							echo "<div class='message'>
    							<a class='pull-left' href='".get_template_directory_uri()."/codes/delete.php?id=".$row->id."' >Hide</a>&nbsp; &nbsp; $nbsp
    							<a class='pull-right' href='".get_template_directory_uri()."/codes/show.php?id=".$row->id."' >Show</a>
    							</div>";
    							}
    							echo "</div>";
    							}
               				}
    						?>
    				</div>
    			</div> <!-- left side -->
    		</div> <!-- row -->
    	</main> <!-- container -->
		<?php include (TEMPLATEPATH .'/footer.php'); ?>
	</body>
</html>
