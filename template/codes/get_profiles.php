<?

@session_start();



$value=trim($_GET["id"]);

$temp = explode(",",$value);

foreach($temp as $val){

	if($val!=0 and $val!=""){

	$con .= "(`expertise` like '%,$val,%' or `expertise` like '$val,%') and ";

	}

}

$con.="1=1";



require( '../../../../wp-load.php' ); // Include the file  to load wordpress connections//

global $wpdb;



$rows=$wpdb->get_results("Select * from wp_people_table where `status`='A' and ($con)");

				//echo $wpdb->last_query;



				foreach($rows as $row){



				if(is_array(getimagesize(get_template_directory_uri()."/uploads/profile/size/".$row->profile_image))){



				$page= get_page_by_title('Profile Page');



				//$link= get_site_url()."/?page_id=".$page->ID."&marked=".$row->id;
				$link= get_site_url()."/profile-page/".$row->id;



				$table.="<a href='".$link."' class='image-wrapper col-xs-12 col-sm-4 col-md-3 col-lg-3'>

						<span class='mask'></span>

						<img src='".get_template_directory_uri()."/uploads/profile/size/".$row->profile_image."' onerror=if(this.src == error.jpg) this.src = ".get_template_directory_uri()."/img/unknown.png'>

						<div class='name-and-title'>							<div class='name'>".stripslashes($row->prefix)." ".stripslashes($row->name)." ".stripslashes($row->last_name)."</div>							<span class='title'>".stripslashes($row->position)."</span>						</div>

						</a>";

				}

				}





echo $table;

?>