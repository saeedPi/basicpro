<?php 
include("../includes/dbconn.php");
//require_once ("../includes/user.php");
require_once ("../includes/functions.php");


$user=user::find_by_id(2);
echo $user->full_name() ."<br />";
$userss=user::find_all();
foreach($userss as $users) {
    echo "user " . $users->username . "<br />";
    echo "name " . $users->firstname . "<br />";
}
echo "hello";
?>