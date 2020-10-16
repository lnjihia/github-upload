<!--
//============================================================+
// Project name : Secret Santa PHP
// Version 		: 2.6 
// Begin       	: 2015-12-31
// Last Update 	: 2016-11-20
//
// Description : Secret Santa is the most popular activity around Christmas from teenage years to corporate life, and especially corporate life. The logistics of Secret Santa are a pain for the person organizing the event, because if you play with a large number of people they forget how they picked, what is the spending limit. So a large Secret Santa pool is going to degenerate in hating people around the holiday times, and lets leave the hating people part for the family reunion.
//
// Author: Radu Dragan
//
// (c) Copyright:
//               Radu Dragan
//               Fotodex.ro
//               www.fotodex.ro
//               radu.dragan@fotodex.ro
//============================================================+

/**
 * @package https://github.com/draganradu/secretsanta-PHP
 * @abstract Secret Santa PHP
 * @author Radu Dragan
 * @since 2015-12-31
 */
-->
<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Josefin+Slab:400,700,700italic' rel='stylesheet' type='text/css'>
<link href='../css/style.css' rel='stylesheet' type='text/css'>


</head>
</body>

<?php

date_default_timezone_set('Europe/Bucharest');
$date = date('m/d/Y H:i:s a', time()); 
$an = date('Y', time());
echo "<h1> Secret Santa {$an} </h1>"; 
echo '<div id="head">' . $date . "</div>";

$csv = array();
if (!empty($_GET['lista'])) {


$file_csv = $_GET['lista'];



$lines = file($file_csv, FILE_IGNORE_NEW_LINES);
foreach ($lines as $key => $value)
{
    $csv[$key] = str_getcsv($value);
}

$nrtel = array_unique(iterator_to_array(new RecursiveIteratorIterator(new RecursiveArrayIterator($csv)), 0));

shuffle($nrtel);

$count_array = count($nrtel)-1;
for ($i = 0; $i<$count_array; $i++){
echo $nrtel[$i] . " - " . $nrtel[$i+1] . "<span>{$i}</span><hr>";
}
echo $nrtel[$i] . " - " . $nrtel[0] . "<span>" . $i ."</span><hr>";

?>
<p style="page-break-after:always;"></p>
<div class="rand">
<?php

for ($i = 0; $i<$count_array; $i++){
echo '<div class="jumate"><img src="../img/copac.png" class="copac">'."{$nrtel[$i]} <br>Secret Santa-ul tau este<hr><h2> {$nrtel[$i+1]}</h2><hr> Nu uita ca cel mai frumos cadou este din suflet. ( limita 50ron )<br> Oare cine o sa iti cumpere tie cadou ?<img class='copac_jos' src='../img/puncte.jpg'><h5>{$i}</h5></div>";
}
echo '<div class="jumate"><img src="../img/copac.png" class="copac">'."{$nrtel[$count_array]} <br>Secret Santa-ul tau este<hr><h2> {$nrtel[0]}</h2><hr> Nu uita ca cel mai frumos cadou este din suflet. ( limita 50ron )<br> Oare cine o sa iti cumpere tie cadou ?<img class='copac_jos' src='../img/puncte.jpg'><h5>{$count_array}</h5></div>";
} else {
	echo "trebuie sa introduci o lista valida";
}
?>


</div>


<div id="footer" onclick="printeaza()">
<img src="../img/print.png">
</div>

<script>
function printeaza() {
    window.print();
}
</script>
</body>
</html>
