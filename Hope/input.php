
<?php
$conn = include_once('connection.php');

	  		$name=$_POST['fname'];
	    $number=$_POST['number'];
		$Anumber=$_POST['Anumber'];
		$lname=$_POST['lname'];	
        if(isset($_POST['cylinder']))
        {
          $res1 = mysqli_query($conn, "INSERT INTO `cylinder`( `name`, `location`, `number`, `alternateNumber` ) VALUES( '$name', '$lname', '$number', '$Anumber' )");

echo '<b1 style="background-color:white">';
        }
        if(isset($_POST['source']))
        {
          $res2=mysqli_query($conn, "INSERT INTO `source`( `name`, `number`, `alternateNumber`, `location` ) VALUES( '$name', '$number', '$Anumber', '$lname' )");
        }
        if(isset($_POST['petshelter']))
        {
          $res3=mysqli_query($conn, "INSERT INTO `petshelter`( `name`, `number`, `alternateNumber`, `location` ) VALUES( '$name', '$number', '$Anumber', '$lname' )");
        }
        if(isset($_POST['medicines']))
        { 
        $res4=mysqli_query($conn, "INSERT INTO `medicines`( `name`, `number`, `alternateNumber`, `location` ) VALUES( '$name', '$number', '$Anumber', '$lname' )");
        }
        if(isset($_POST['freefood']))
        { 
         $res5=mysqli_query($conn, "INSERT INTO `freefood`( `name`, `number`, `alternateNumber`, `location` ) VALUES( '$name', '$number', '$Anumber', '$lname' )");
        }
        if(isset($_POST['quarantine']))
        { 
         $res6=mysqli_query($conn, "INSERT INTO `quarantine`( `name`, `number`, `alternateNumber`, `location` ) VALUES( '$name', '$number', '$Anumber', '$lname' )");
        } 
         if(isset($_POST['finance']))
         {
        $res7=mysqli_query($conn, "INSERT INTO `finance`( `name`, `number`, `alternateNumber`, `location` ) VALUES( '$name', '$number', '$Anumber', '$lname' )");
         }
         if(isset($_POST['oximeter']))
         {
          $res8=mysqli_query($conn, "INSERT INTO `oximeter`( `name`, `number`, `alternateNumber`, `location` ) VALUES( '$name', '$number', '$Anumber', '$lname' )");
         }
         if(isset($_POST['submit'])) {
          header('Location: response_page.php');
          exit();
	     }

?>



