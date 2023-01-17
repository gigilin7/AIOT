
<?php
/*AddData.php*/
//1 . connect to db
$mysqli = new mysqli("localhost","test123","test123","aiotdb");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

// 2. Perform query
//$sqlcmd = "insert into sensors (light,humi,temp) VALUES (".$light.",".$humi.",".$temp.")";
$sqlcmd2 = "select * from sensors";
$result = $mysqli -> query($sqlcmd2); //$result is a pointer


// 3. put in PHP array 
$data; //array
$i=0;
while ($row=mysqli_fetch_array($result,MYSQLI_NUM)){
	$data[$i]=$row;
	$i ++;
}
//4. encode data to json
 echo json_encode($data);

//5. close

$mysqli -> close();
?>
