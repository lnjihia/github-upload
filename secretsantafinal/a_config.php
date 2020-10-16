<html>
<head>
    <link href='https://fonts.googleapis.com/css?family=Josefin+Slab:400,700,700italic' rel='stylesheet' type='text/css'>
    <link href='css/style.css' rel='stylesheet' type='text/css'>
    <link href='css/santa.css' rel='stylesheet' type='text/css'>
</head>
<body>

<?php

    date_default_timezone_set('Africa/Nairobi');
    $date = date('d/m/Y H:i:s a', time()); 
    $an = date('Y', time());
    echo "<h1> Secret Santa {$an} </h1>"; 
    echo '<div id="head">' . $date . "</div>";

define('servername', 'localhost');
define('username', 'root');
define('password','root@#');
define('dbname','santatest');
//Attempt to connect to MySQL Database
$link = mysqli_connect(servername,  username, password, dbname);

//Check connection
if($link == false){
	die("ERROR: Could not connect." .mysqli_connect_error());
}

//mysqli_connect($link);

$santa = $_POST['santa'];
$santabranch = $_POST['santabranch'];
//$email = $_POST['email'];

$randomnumber = rand(1,385);

$id = "SELECT name, designation, branch FROM options WHERE id = $randomnumber and flag = 0";
$result = mysqli_query($link, $id);


if (!empty($result)){
 	
//$sql = "insert into options (santa, santabranch) values('".$santa."','".$santabranch."') where id = $randomnumber ";
//$sqli = "UPDATE `options` SET  `branch` = $santta WHERE id = 1";
 
$sql = "UPDATE `options` SET `flag` = 1, `santa` = '$santa', `santabranch` = '$santabranch' WHERE `id` = $randomnumber";


$result2 = mysqli_query($link, $sql);

   if(mysqli_query($link, $sql)){

		if (mysqli_num_rows($result) > 0){
    	// output data of each row
    		while($row = mysqli_fetch_assoc($result)) { 

    			echo "You will be a SECRET SANTA to.... <br> ".
         		"<br>".
         		"<br>".
         		"Name: {$row['name']}  <br> ".
         		"Designation: {$row['designation']} <br> ".
         		"Branch: {$row['branch']} <br> ";
    			}
 			} else {
   				echo "Please refresh the page"; }
   	}else{
   		echo "not working";
   	}

}  	

/*

//mysqli_query($link, $sql);

/* $id2 = "SELECT name, designation, branch FROM options WHERE id = $randomnumber and flag = 1";
   $result2 = mysqli_query($link, $id2);

   if (!empty($result2)){
    // output data of each row
       
        $sql = "UPDATE options SET santa = $santa, $santabranch = $santabranch WHERE id = 117";
        mysqli_query($link, $sql);


        echo "Insert working";
    } else {
    	echo "Refresh";
    }

/*$sql = "INSERT INTO `options` (santa, santabranch) VALUES( $santa, $santabranch) 
		WHERE id = $randomnumber";

$result2 = mysqli_query($link, $sql); 
if (!empty ($result2)){
	if (mysql_num_rows($result2)> 0 ) {
		//output data of each row
		while ($row = mysqli_fetch_assoc($result2)) {
			echo "Insert worked";
		} else{
			echo "Insert has not worked";
		}
		
	}
}

echo "$sql"; 


//$sql = "INSERT into options (santa, santabranch) values('".$santa."','".$santabranch."') where id = $randomnumber ";

//mysqli_query($link, $sql);



}
}


/* if(mysqli_query($link, $sql)){
	//records created successfully
	header(("location:.php"));
} else {
	echo "ERROR: Could not be able to execute $sql" . mysqli_connect_error($link);
} */


/* if(mysqli_query($link, $sql2)){
    echo "Records were updated successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 } */


mysqli_free_result($result); 

mysqli_close($link);
?>
<div>
	<form action="page2.php">
		<input type="submit" class="input-submit" value="Okay!">
	</form>
</div>

<div id="footer"> </div>

</body>
</html>