<?php

function calcul_age(){

if(isset($_POST['birthdate'])){
$birthdate = strtotime($_POST['birthdate']);
$day_birthday=date('d',$birthdate);
$month_birthday=date('m',$birthdate);
$year_birthday=date('Y',$birthdate);

$day_totoday=date('d');
$month_totoday=date('m');
$year_totoday=date('Y');
// var_dump($day);

if($day_birthday > $day_totoday && $month_birthday>= $month_totoday ){
$age=($year_totoday - $year_birthday)-1;
}
else {
$age=($year_totoday - $year_birthday);
}
}
else {
echo "<p> vous n'avez pas ecris de date.</p>";
}

echo "<p> vous avez".$age." ans</p>";
}
calcul_age();

?>
