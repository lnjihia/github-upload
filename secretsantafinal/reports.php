<html>
<head>
    <link href='https://fonts.googleapis.com/css?family=Josefin+Slab:400,700,700italic' rel='stylesheet' type='text/css'>
    <link href='css/style.css' rel='stylesheet' type='text/css'>
    <link href='css/santa.css' rel='stylesheet' type='text/css'>
</head>
<body>



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

$sqli = "SELECT `name`, `designation`, `branch`, `santa`, `santabranch` FROM `options` WHERE `flag` = 1";

);

$result3 = mysql_query($link, $sqliif (mysqli_uery($link, $sqli) {
    # code...
    if (mysqli_num_rows($result3) > 0) {
        echo "<table><tr><th>Name</th><th>Designation</th><th>Branch</th><th></th><th>Name of Santa</th><th>Branch/Dept of Santa</th></tr>";
        // output data of each row
        while($row = $result3->fetch_assoc()) {
            echo "<tr>
            <td>" .$row["name"]." </td>
            <td>" .$row["designation"]." </td
            <td>" .$row["lastname"]." </td>;
            <td>"  " </td>
            <td>" .$row["santa"]." </td>
            <td>" .$row["santabranch"]." </td> ;
            </tr>"
        }
            echo "</table>";
        } else {
            echo "0 results";}
}        

mysqli_close($link);


?>  

<div id="footer"> </div>

</body>
</html>