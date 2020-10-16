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
	<link href='css/style.css' rel='stylesheet' type='text/css'>
	<link href='css/santa.css' rel='stylesheet' type='text/css'>
</head>
</body>
<?php
	date_default_timezone_set('Africa/Nairobi');
	$date = date('d/m/Y H:i:s a', time()); 
	$an = date('Y', time());
	echo "<h1> Secret Santa {$an} </h1>"; 
	echo '<div id="head">' . $date . "</div>";
?>
<form action="a_config.php" method="POST">
<div>
	<p> Please insert your name <p>
	<input class="input-lung" name="santa" type="text" placeholder="Please insert your name">
</div>

<div>
	<p> Please insert your branch <p>
	<select name="santabranch">
                 <option selected>Please insert your branch</option>
                  <option value="AAINSURANCE BROKERS">AAINSURANCE BROKERS</option>
                  <option value="AARST INSTITUTE">AARST INSTITUTE</option>
                  <option value="AIG OFFICE">AIG OFFICE</option>
                  <option value="AUDIT">AUDIT</option>
                  <option value="BURUBURU">BURUBURU</option>
                  <option value="BUSINESS DEVELOPMENT">BUSINESS DEVELOPMENT</option>
                  <option value="CEO'S OFFICE">CEO'S OFFICE</option>
                  <option value="CHUKA">CHUKA</option>
                  <option value="ELDORET">ELDORET</option>
                  <option value="EMBAKASI">EMBAKASI</option>
                  <option value="EMBU">EMBU</option>
                  <option value="FINANCE">FINANCE</option>
                  <option value="GITHUNGURI">GITHUNGURI</option>
                  <option value="H/Q">H/Q</option>
                  <option value="HUMAN RESOURCE">HUMAN RESOURCE</option>
                  <option value="HURLINGHAM">FIELDALLOW</option>
                  <option value="I.T">I.T</option>
                  <option value="KAHAWA SUKARI">KAHAWA SUKARI</option>
                  <option value="KAHAWA WENDANI">KAHAWA WENDANI</option>
                  <option value="KAKAMEGA">KAKAMEGA</option>
                  <option value="KARATINA">KARATINA</option>
                  <option value="KERICHO">KERICHO</option>
                  <option value="KIAMBU">KIAMBU</option>
                  <option value="KISII">KISII</option>
                  <option value="KISUMU">KISUMU</option>
                  <option value="KITALE">KITALE</option>
                  <option value="KITUI">KITUI</option>
                  <option value="MACHAKOS">MACHAKOS</option>
                  <option value="MERU">MERU</option>
                  <option value="MOMBASA">MOMBASA</option>
                  <option value="NAIVASHA">NAIVASHA</option>
                  <option value="NAKURU">NAKURU</option>
                  <option value="NANYUKI">NANYUKI</option>
                  <option value="NYERI">NYERI</option>
                  <option value="ONGATA RONGAI">ONGATA RONGAI</option>
                  <option value="OPERATIONS">OPERATIONS</option>
                  <option value="PREMIER DRIVING SCHOOL">PREMIER DRIVING SCHOOL</option>
                  <option value="SARIT CENTRE">SARIT CENTRE</option>
                  <option value="TECHNICAL AND COMMERCIAL SERVICES ">TECHNICAL AND COMMERCIAL SERVICES </option>
                  <option value="THIKA">THIKA</option>
                  <option value="VILLAGE MARKET">VILLAGE MARKET</option>
    </select>
</div>
<input type="submit" class="input-submit" value="Choose a person!">
</form>



<div id="footer"></div>

</body>
</html>
