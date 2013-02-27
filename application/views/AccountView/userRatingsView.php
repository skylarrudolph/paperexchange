<h3><b>Your Stats</b></h3>
<div id="description">
	<table>
		<tr>
			Ratings given: 
		</tr>
		<tr>
			<?php 
				$this->load->database();
				$userID = $_SESSION['loggedInUser']['user_id'];
				// SELECT * FROM `project_oddjobs`.`workforcebids_job_ratings` WHERE `rater_id`='" . $userID . "';
				$sql =  "SELECT * FROM `project_oddjobs`.`workforcebids_job_ratings` WHERE `rater_id`='" . $userID ."';";
				$result = mysql_query($sql) or die(mysql_error());
				echo mysql_num_rows($result);
			?>
		</tr>
	</table>
</div>