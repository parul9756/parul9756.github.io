<!DOCTYPE html>
<html>
<head>
	<title>HELPERS</title>
	<style>

		table
		{

			width: 100%;
            color: #5c0000;
			font-family: monospace;
			font-size: 25px;
			text-align: center;

		}
		td
		{
			font-size: 25px;
			background-color: white;
			color: black;
			background-color: #f2f2f2;
		}
		th
		{

			font-size: 35px;
			background-color: #5c0000;
			color: white;
		}
	
         h1
         {
         	text-align: center;
         	font-size: 30px;
         	color: black;
         }
	</style>
</head>
<body>

<table>
<tr>
	<th>Name</th>
	<th>Number</th>
	<th>Alternate Number</th>
</tr>	
<?php
$conn= include_once('connection-needer.php');
$lname=$_POST['lname'];

if(isset($_POST['cylinder']))
{ 
	echo "<h1>"."People who have oxygen cylinders in ".$lname." are in List below"."</h1>";

$sql = "SELECT name, number, alternateNumber FROM cylinder where location='$lname'";


 $result = $conn->query($sql) or die($conn->error);
  // output data of each row
if($result -> num_rows > 0)
{
  while($row = $result->fetch_assoc()) {

    echo "<tr><td>".$row["name"]."</td><td>".$row["number"]."</td><td>".$row["alternateNumber"]."</td></tr>";
  }
  echo "</table>";
}
else
{
	echo "No Results";
}
$conn->close();
}


if(isset($_POST['source']))
{
	echo "<h1>"."People who have source for beds in ".$lname." are in List below"."</h1>";
	$sql = "SELECT name, number, alternateNumber FROM source where location='$lname'";


 $result = $conn->query($sql) or die($conn->error);
  // output data of each row
if($result -> num_rows > 0)
{
  while($row = $result->fetch_assoc()) {

    echo "<tr><td>".$row["name"]."</td><td>".$row["number"]."</td><td>".$row["alternateNumber"]."</td></tr>";
  }
  echo "</table>";
}
else
{
	echo "No Results";
}
$conn->close();
}


if(isset($_POST['petshelter']))
{
	echo "<h1>"."People who have Petshelter in ".$lname." are in List below"."</h1>";
	$sql = "SELECT name, number, alternateNumber FROM petshelter where location='$lname'";


 $result = $conn->query($sql) or die($conn->error);
  // output data of each row
if($result -> num_rows > 0)
{
  while($row = $result->fetch_assoc()) {

    echo "<tr><td>".$row["name"]."</td><td>".$row["number"]."</td><td>".$row["alternateNumber"]."</td></tr>";
  }
  echo "</table>";
}
else
{
	echo "No Results";
}
$conn->close();
}


if(isset($_POST['medicines']))
{

	echo "<h1>"."People who have Medicines available in ".$lname." are in List below"."</h1>";
	$sql = "SELECT name, number, alternateNumber FROM medicines where location='$lname'";


 $result = $conn->query($sql) or die($conn->error);
  // output data of each row
if($result -> num_rows > 0)
{
  while($row = $result->fetch_assoc()) {

    echo "<tr><td>".$row["name"]."</td><td>".$row["number"]."</td><td>".$row["alternateNumber"]."</td></tr>";
  }
  echo "</table>";
}
else
{
	echo "No Results";
}
$conn->close();
}


if(isset($_POST['freefood']))
{
	echo "<h1>"."People who have supply of Free Food in ".$lname." are in List below"."</h1>";
	$sql = "SELECT name, number, alternateNumber FROM freefood where location='$lname'";


 $result = $conn->query($sql) or die($conn->error);
  // output data of each row
if($result -> num_rows > 0)
{
  while($row = $result->fetch_assoc()) {

    echo "<tr><td>".$row["name"]."</td><td>".$row["number"]."</td><td>".$row["alternateNumber"]."</td></tr>";
  }
  echo "</table>";
}
else
{
	echo "No Results";
}
$conn->close();
}


if(isset($_POST['quarantine']))
{
	echo "<h1>"."People who have spare place for Quarantine in ".$lname." are in List below"."</h1>";
	$sql = "SELECT name, number, alternateNumber FROM quarantine where location='$lname'";


 $result = $conn->query($sql) or die($conn->error);
  // output data of each row
if($result -> num_rows > 0)
{
  while($row = $result->fetch_assoc()) {

    echo "<tr><td>".$row["name"]."</td><td>".$row["number"]."</td><td>".$row["alternateNumber"]."</td></tr>";
  }
  echo "</table>";
}
else
{
	echo "No Results";
}
$conn->close();
}


if(isset($_POST['finance']))
{
	echo "<h1>"."People who can help financially in ".$lname." are in List below"."</h1>";
	$sql = "SELECT name, number, alternateNumber FROM finance where location='$lname'";


 $result = $conn->query($sql) or die($conn->error);
  // output data of each row
if($result -> num_rows > 0)
{
  while($row = $result->fetch_assoc()) {

    echo "<tr><td>".$row["name"]."</td><td>".$row["number"]."</td><td>".$row["alternateNumber"]."</td></tr>";
  }
  echo "</table>";
}
else
{
	echo "No Results";
}
$conn->close();
}


if(isset($_POST['oximeter']))
{
	echo "<h1>"."People who can provide oximeters in ".$lname." are in List below"."</h1>";
	$sql = "SELECT name, number, alternateNumber FROM oximeter where location='$lname'";


 $result = $conn->query($sql) or die($conn->error);
  // output data of each row
if($result -> num_rows > 0)
{
  while($row = $result->fetch_assoc()) {

    echo "<tr><td>".$row["name"]."</td><td>".$row["number"]."</td><td>".$row["alternateNumber"]."</td></tr>";
  }
  echo "</table>";
}
else
{
	echo "No results";
}
$conn->close();
}


?>
</table>
</body>
</html>

