<?php 

function FindIndex($round, $scoretype){
	//round 1-9
	//scoretype (Marked, Correct)
	return 'R'.$round.$scoretype;
}

function add_team($team_id){
	if (array_key_exists("teamID",$_SESSION)){
		return '<td><input type="checkbox" name="addteam[]" value="'.$team_id.'"></td>';
	}

}


function remove_team($team_id){
	if (array_key_exists("teamID",$_SESSION)){
		return '<td><input type="checkbox" name="deleteteam[]" value="'.$team_id.'"></td>';
	}

}


function iscurrent($teamID){

	$match = false;

	if (array_key_exists("teamID", $_SESSION)) {
		if ($teamID == $_SESSION["teamID"]){
			$match = true;
		}
	}

	return $match;
}