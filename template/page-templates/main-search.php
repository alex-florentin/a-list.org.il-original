<?
/**
 * Template Name: Main Search Page
 * Develloped By : DigitalTrix
 * Email : mayanksharma1273@gmail.com
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

 @session_start();
 ini_set("display_errors","off");
 $marked=$_POST["search_box"];
	global $wpdb;
	$values=$wpdb->get_results("Select * from wp_category_table where `id` like '%$marked%'");
	foreach($values as $value){
		$cat.=$value->id.",";
	}
	$cat.="0";
	if($marked!=""){
		$con.="(`name` like '%$marked%' or `last_name` like '%$marked%' or `city` like '%$marked%' or `language` like '%$marked%' or `title` like '%$marked%' or `position` like '%$marked%' or `area` like '%$marked%' or `bio` like '%$marked%' or `more_expertise` like '%$marked%' or `expertise` in ($cat))";
	}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>><?php include (TEMPLATEPATH . '/head.php'); ?>

    <body>
    <?php get_header(); ?>

	<main class="container profiles">
		<div id="content" class="row">
			<?
			$rows=$wpdb->get_results("Select * from wp_people_table where `status`='A' and $con");			foreach($rows as $row){
			if(is_array(getimagesize(get_template_directory_uri()."/uploads/profile/".$row->profile_image))){}

			{			$page= get_page_by_title('Profile Page');
			//$link= get_site_url()."/?page_id=".$page->ID."&marked=".$row->id;
			$link= get_site_url()."/profile-page/".$row->id;

			?>
         <a href="<?= $link ?>" class="image-wrapper col-xs-12 col-sm-4 col-md-3 col-lg-3">

			 <span class="mask"></span>
			 <img src="<?php echo get_template_directory_uri(); ?>/uploads/profile/size/<?= $row->profile_image?>" class="grayscale">
			 <div class="name-and-title">
             <div class="name"><?= stripslashes($row->prefix). " " .stripslashes($row->name)." ".stripslashes($row->last_name) ?></div>
            <span class="title"><?= stripslashes($row->position) ?></span>
			 </div>
			</a>
            <?		}
				}
			?>
		</div>
	</main>
		<?php include (TEMPLATEPATH . '/footer.php'); ?>
	</body>
    <!-- search page -->
</html>