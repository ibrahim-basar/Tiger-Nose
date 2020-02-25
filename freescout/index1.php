<?php
$file ="teams.json";
$js = json_decode(file_get_contents($file),true);
if($_GET["teamid"]){
$js[$_GET["teamid"]]= array("teamname"=>$_GET["teamname"]);
file_put_contents($file,json_encode($js));
}
$webpage = file_get_contents("index1.html");
echo $webpage;
?>

