<?


/**


 * Template Name: Register Page


 *


 * @package WordPress


 * @subpackage Twenty_Fourteen


 * @since Twenty Fourteen 1.0


 */


error_reporting(0);





@session_start();





if(sizeof($_SESSION["post_values"])>1){





$values=$_SESSION["post_values"];





//var_dump($values);


}





?>








<!DOCTYPE html>








<html <?php language_attributes(); ?>>








<?php include (TEMPLATEPATH . '/head.php'); ?>








<body>








<script>








$(document).ready(function(){








	$("#AddMore").click(function(){








		document.write("hi");








	});








});








</script>








	<?php get_header(); ?>








	<main class="container register">








		<div class="row">








			<form name="form" action="<?= get_template_directory_uri(); ?>/codes/reg.php" method="POST" enctype="multipart/form-data">








      <?








			if($_SESSION["error"]!=""){








				echo "<div class='row'>








					<div class='say-error'>".$_SESSION["error"]."</div>








				</div>";








			} elseif($_SESSION["msg"]!=""){








				echo "<div class='row'>








					<div class='say-ok'>".$_SESSION["msg"]."</div>








				</div>";








			}








  		?>








      <div class="left-side col-xs-12 col-sm-6 col-md-6 col-xs-12">








			<div class="input">








				<label class="title" for="">נקודת מבט</label> <!-- point of view (institutional use) -->








				<div class="field">








					<div class="checkbox-group">








							<label>





									<?


										if(in_array('תעסוקה בתחום',$values["cat"])){


											$checked="checked";


										}


									?>





                                    <input name="cat[]" type="checkbox" value="תעסוקה בתחום" <?= $checked ?>><span>תעסוקה בתחום</span>








							</label>








							<label>


									<?


										if(in_array('חוקר/ת את התחום',$values["cat"])){


											$checked="checked";


										}


									?>





									<input name="cat[]" type="checkbox" value="חוקר/ת את התחום" <?= $checked ?>><span>חוקר/ת את התחום</span>








							</label>








							<label>


									<?


										if(in_array('הבעת עמדה',$values["cat"])){


											$checked="checked";


										}


									?>





									<input name="cat[]" type="checkbox" value="הבעת עמדה" <?= $checked ?>><span>הבעת עמדה</span>








							</label>








					</div>








				</div>








			</div> <!-- input -->








			<div class="input">








				<label class="title" for="">ניסיון תעסוקתי / אקדמי</label> <!-- work/academic experience -->








				<div class="field">








					<textarea name="bio" rows="2" cols="60"><?= $values["bio"]?></textarea>








				</div>








			</div> <!-- input -->








			<div class="input">








				<label class="title" for="">מה מניע אותי?</label> <!-- what drives me -->








				<div class="field">








					<textarea name="drive" rows="2" cols="60"><?= $values["drive"]?></textarea>








				</div>








			</div> <!-- input -->








			<div class="input">








				<label class="title" for="">שפות</label> <!-- languages -->








				<div class="field">








					<div class="checkbox-group">








							<label>





                                	<?


										if(in_array('עברית',$values["language"])){


											$checked="checked";


										}else{


											$checked="";


										}


									?>





									<input name="language[]" type="checkbox" value="עברית" <?= $checked ?>><span>עברית</span>








							</label>








							<label>





                                	<?


										if(in_array('אנגלית',$values["language"])){


											$checked="checked";


										}else{


											$checked="";


										}


									?>





									<input name="language[]" type="checkbox" value="אנגלית" <?= $checked ?>><span>אנגלית</span>








							</label>








							<label>


                                	<?


										if(in_array('ערבית',$values["language"])){


											$checked="checked";


										}else{


											$checked="";


										}


									?>





									<input name="language[]" type="checkbox" value="ערבית" <?= $checked ?>><span>ערבית</span>








							</label>








							<label>





                                	<?


										if(in_array('רוסית',$values["language"])){


											$checked="checked";


										}else{


											$checked="";


										}


									?>





									<input name="language[]" type="checkbox" value="רוסית" <?= $checked ?>><span>רוסית</span>








							</label>








							<label>





                                	<?


										if(in_array('אמהרית',$values["language"])){


											$checked="checked";


										}else{


											$checked="";


										}


									?>





									<input name="language[]" type="checkbox" value="אמהרית" <?= $checked ?>><span>אמהרית</span>








							</label>








							<label>


                                	<?


										if(in_array('צרפתית',$values["language"])){


											$checked="checked";


										}else{


											$checked="";


										}


									?>





									<input name="language[]" type="checkbox" value="צרפתית" <?= $checked ?>><span>צרפתית</span>








							</label>








							<label>


                                	<?


										if(in_array('יידיש',$values["language"])){


											$checked="checked";


										}else{


											$checked="";


										}


									?>





									<input name="language[]" type="checkbox" value="יידיש" <?= $checked ?>><span>יידיש</span>








							</label>








							<label>





                                	<?


										if(in_array('פרסית',$values["language"])){


											$checked="checked";


										}else{


											$checked="";


										}


									?>





									<input name="language[]" type="checkbox" value="פרסית" <?= $checked ?>><span>פרסית</span>








							</label>








							<label>





                                	<?


										if(in_array('גרמנית',$values["language"])){


											$checked="checked";


										}else{


											$checked="";


										}


									?>





									<input name="language[]" type="checkbox" value="גרמנית" <?= $checked ?>><span>גרמנית</span>








							</label>








							<label>





                                	<?


										if(in_array('פולנית',$values["language"])){


											$checked="checked";


										}else{


											$checked="";


										}


									?>





									<input name="language[]" type="checkbox" value="פולנית" <?= $checked ?>><span>פולנית</span>








							</label>








							<label>





                                	<?


										if(in_array('איטלקית',$values["language"])){


											$checked="checked";


										}else{


											$checked="";


										}


									?>





									<input name="language[]" type="checkbox" value="איטלקית" <?= $checked ?>><span>איטלקית</span>








							</label>








							<label>





                                	<?


										if(in_array('ספרדית',$values["language"])){


											$checked="checked";


										}else{


											$checked="";


										}


									?>





									<input name="language[]" type="checkbox" value="ספרדית" <?= $checked ?>><span>ספרדית</span>








							</label>








							<label>





                                	<?


										if(in_array('פורטוגזית',$values["language"])){


											$checked="checked";


										}else{


											$checked="";


										}


									?>





									<input name="language[]" type="checkbox" value="פורטוגזית" <?= $checked ?>><span>פורטוגזית</span>








							</label>








							<label>








                                	<?


										if(in_array('הינדי',$values["language"])){


											$checked="checked";


										}else{


											$checked="";


										}


									?>


									<input name="language[]" type="checkbox" value="הינדי" <?= $checked ?>><span>הינדי</span>








							</label>








					</div>








				</div>








			</div> <!-- input -->








			<div class="input">








				<label class="title" for="">הופעות במדיה מאמרים</label> <!-- references to media articles -->








				<div class="field">
				<div class="media">
					<div id="add">
						if(is_array($values["title"])){
						for($i=0;$values["title"][$i]!="";$i++){
						?>

						<input type="text" placeholder="שֵׁם" name="title[]" value="<?= $values["title"][$i] ?>" maxlength="40"><input type="text" placeholder="לְקַשֵׁר" name="link[]" value="<?= $values["link"][$i] ?>">

					   <?	}} else { ?>

	            	<input type="text" placeholder="שֵׁם" name="title[]" maxlength="40"><input type="text" placeholder="לְקַשֵׁר" name="link[]"><br />

						<? } ?>

	           </div>
				  <button type="button" id="AddMore">+</button>

				</div>








				</div>








			</div> <!-- input -->








			<div class="input">








				<label class="title" for="">רשתות חברתיות</label> <!-- social networks -->








				<div class="field">








					<input class="facebook" name="facebook" type="text" value="<?= $values["facebook"] ?>" placeholder="קישור פייסבוק"><i class="fa fa-facebook"></i>








					<input class="twitter" name="twitter" type="text" value="<?= $values["twitter"] ?>" placeholder="קישור טוויטר"><i class="fa fa-twitter"></i>








					<input class="linkedin" name="linkdn" type="text" value="<?= $values["linkedin"] ?>"  placeholder="קישור Linkedin"><i class="fa fa-linkedin"></i>








				</div>








			</div> <!-- input -->








			<div class="input">








				<label class="title" for="">סרטון יוטיוב</label> <!-- youtube -->








				<div class="field">








					<input type="text" placeholder="קישור וידאו" name="youtube" value="<?= $values["youtube"] ?>">








				</div>








            </div> <!-- input -->








			<div class="input">








				<label class="title" for="">אמצעי תקשורת מועדף</label> <!-- favorite media-->








				<div class="field">








					<div class="checkbox-group">








						<label>








                                	<?


										if(in_array('interview-tv-internet',$values["cat1"])){


											$checked="checked";


										}else{


											$checked="";


										}


									?>


								<input name="cat1[]" type="checkbox" value="interview-tv-internet" <?= $checked ?>><span>ראיון מצולם (טלוויזיה/אינטרנט)</span>








						</label>








						<label>





                                	<?


										if(in_array('radio-interview',$values["cat1"])){


											$checked="checked";


										}else{


											$checked="";


										}


									?>





								<input name="cat1[]" type="checkbox" value="radio-interview" <?= $checked ?>><span>ראיון רדיו</span>








						</label>








						<label>





                                	<?


										if(in_array('articles-written-comunication',$values["cat1"])){


											$checked="checked";


										}else{


											$checked="";


										}


									?>





							<input name="cat1[]" type="checkbox" value="articles-written-comunication" <?= $checked ?>><span>תקשורת כתובה ­ מאמרים</span>








						</label>








						<label>





                                	<?


										if(in_array('participation-panels',$values["cat1"])){


											$checked="checked";


										}else{


											$checked="";


										}


									?>





								<input name="cat1[]" type="checkbox" value="participation-panels" <?= $checked ?>> <span>השתתפות בפאנלים</span>








						</label>








					</div>








				</div>








			</div> <!-- input -->








			<div class="input">








				<label class="title" for="">מעוניינת/זקוקה להכשרה תקשורתית?</label> <!-- wants media training? -->








				<div class="field">





					<?


						if($values["use"]=="לא"){


							$checked1="selected";


						}else{


							$checked2="selected";


						}


					?>


					<select class="" name="use">





						<option value="לא" <?= $checked1 ?>>לא</option>





						<option value="כן" <?= $checked2 ?>>כן</option>





					</select>








				</div>








			</div> <!-- input -->








			<div class="input">








				<label class="title" for="">תמונת פרופיל (מידות מומלצים: 400x400 פיקסלים)</label> <!-- upload profile photo -->








				<div class="field">








					<input type="file" name="photo" class="upload-profile-image" required>








				</div>








			</div> <!-- input -->








			<div class="input">








				<label class="title" for="">העלה קורות חיים שלך (PDF או המסמך Word)</label> <!-- upload your CV -->








				<div class="field">








					<input type="file" name="cv" class="upload-cv">








				</div>








			</div> <!-- input -->








		</div> <!-- left side -->








		<div class="right-side col-xs-12 col-sm-6 col-md-6 col-xs-12">








			<div class="input">








				<label class="title" name="email">כתובת דואר אלקטרוני</label> <!-- email adress -->








				<div class="field">








					<input type="email" name="email" value="<?= $values["email"] ?>" required>








				</div>








			</div> <!-- input -->








			<div class="input">








				<label class="title" for="">כינוי</label> <!-- nickname -->








				<div class="field">








					<input type="text" name="nick" value="<?= $values["nick"] ?>">








				</div>








			</div> <!-- input -->








			<div class="input">








				<label class="title" for="">ססמה</label> <!-- password -->








				<div class="field">








					<input type="password" name="password" required>








				</div>








			</div> <!-- input -->








			<div class="input">








				<label class="title" for="">אשר סיסמא</label> <!-- confirm password -->








				<div class="field">








					<input type="password" name="con-password" required>








				</div>








			</div> <!-- input -->








			<div class="input">








				<label class="title" for="">תחילית (לדוגמה - פרופ', ד"ר, עו"ד וכו'.)</label> <!-- prefix (dr, prof, etc) -->








				<div class="field">








					<input type="text" name="prefix" value="<?= htmlentities($row->prefix); ?>">








				</div>








			</div> <!-- input -->








			<div class="input">








				<label class="title" for="">שם פרטי</label> <!-- first name -->








				<div class="field">








					<input type="text" name="name"  value="<?= $values["name"] ?>" required>








				</div>








			</div> <!-- input -->








			<div class="input">








				<label class="title" for="">שם משפחה</label> <!-- last name -->








				<div class="field">








					<input type="text" name="last_name" value="<?= $values["last_name"] ?>" required>








				</div>








			</div> <!-- input -->








			<div class="input">








				<label class="title" for="">תואר</label> <!-- degree -->








				<div class="field">








					<input type="text" name="position" value="<?= htmlentities($row->position); ?>">








				</div>








			</div> <!-- input -->








			<div class="input">








				<label class="title" for="">טלפון</label> <!-- phone -->








				<div class="field">








					<input type="text" name="contact" value="<?= $values["contact"] ?>">








				</div>








			</div> <!-- input -->








			<div class="input">








				<label class="title" for="">ישוב</label> <!-- city -->








				<div class="field">








					<input type="text" name="city" value="<?= $values["city"] ?>">








				</div>








			</div> <!-- input -->








			<div class="input">








				<label class="title" for="">אזור מגורים</label> <!-- living area -->








				<div class="field">





                	<?


						if($values["area"]=="- ללא -"){


							$select1="selected";


						}elseif($values["area"]=="שרון"){


							$select2="selected";


						}elseif($values["area"]=="דָרוֹם"){


							$select3="selected";


						}elseif($values["area"]=="תל אביב"){


							$select4="selected";


						}elseif($values["area"]=="יְרוּשָׁלַיִם"){


							$select5="selected";


						}elseif($values["area"]=="צפון"){


							$select6="selected";


						}


					?>





					<select class="" name="area">

						<option value="- ללא -" <?= $select1?>>- ללא -</option>

						<option value="שרון" <?= $select2?>>שרון</option>

						<option value="דָרוֹם" <?= $select3?>>דָרוֹם</option>

						<option value="תל אביב" <?= $select4?>>תל אביב</option>

						<option value="יְרוּשָׁלַיִם" <?= $select5?>>יְרוּשָׁלַיִם</option>

						<option value="צפון" <?= $select6?>>צפון</option>


					</select>


				</div>

			</div> <!-- input -->

			<div class="input">


				<label class="title" for=""></label> <!-- categories (hidden on form) -->

				<div class="field">


					<div class="checkbox-group">


						<?

							global $wpdb;

							//var_dump($wpdb);

							$rows=$wpdb->get_results("Select name , id from wp_category_table");

							foreach($rows as $row){

								if(in_array($row->id,$values["profile"])){


								echo "<label><input name='profile[]' type='checkbox' value='".$row->id."' checked><span>".$row->name."</span></label>&nbsp;";

								}else{

								echo "<label><input name='profile[]' type='checkbox' value='".$row->id."'><span>".$row->name."</span></label>&nbsp;";

								}

							}

						?>

					</div>

				</div>

			</div> <!-- input -->


			<div class="input">

				<label class="title" for="">תחומי התמחות</label> <!-- areas of expertise -->

				<div class="field">

					<textarea name="more" rows="2" cols="60"><?= $values["more"]?></textarea>

				</div>

			</div> <!-- input -->

			<div class="input">

				<div class="field">

					<div class="checkbox-group">

							<?

								if($values["public"]=="Y"){

									$check="checked";

								}else{

									$check="";

								}

							?>

									<input type="checkbox" name="public" value="Y" <?= $check ?>>הפוך את הפרופיל שלך לציבורי <!-- make public your profile -->

					</div>








				</div>








			</div> <!-- input -->








			<input type="submit" value="הגשה" class="submit-registration"/>








		</div> <!-- right side -->








				</form>








			</div>








	</main>








		<?php include (TEMPLATEPATH . '/footer.php'); ?>








	</body>








<script>
	var family_html =  '<input type="text" placeholder="שֵׁם" name="title[]" maxlength="40"><input type="text" placeholder="לְקַשֵׁר" name="link[]"><br />';
	$('#add').append(family_html);
});
</script>


















</html>








<?








	unset($_SESSION["error"]);








	unset($_SESSION["msg"]);








?>