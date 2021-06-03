<?php
$conn = include_once('connection-report.php');

	  	$location=$_POST['location'];
	    $number=$_POST['number'];
		$Anumber=$_POST['Anumber'];

	   echo "<script>console.log(".json_encode($number).");</script>";
       echo "<script>console.log(".json_encode(isset($_POST['source'])).");</script>";
       echo "<script>console.log(".json_encode($_POST).");</script>";
        if(isset($_POST['cylinder']))
        {
          $res1= mysqli_query($conn, "DELETE FROM `cylinder` WHERE `cylinder`.`number` = '$number'");
        }
        if(isset($_POST['source']))
        {
          $res2= mysqli_query($conn, "DELETE FROM `source` WHERE `source`.`number` = '$number'");
          echo "<script>console.log(".json_encode($res2).");</script>";
        }
        if(isset($_POST['petshelter']))
        {
          $res3= mysqli_query($conn, "DELETE FROM `petshelter` WHERE `petshelter`.`number` = '$number'");
        }
        if(isset($_POST['medicines']))
        { 
        $res4= mysqli_query($conn, "DELETE FROM `medicines` WHERE `medicines`.`number` = '$number'");
        }
        if(isset($_POST['freefood']))
        { 
         $res5= mysqli_query($conn, "DELETE FROM `freefood` WHERE `freefood`.`number` = '$number'");
        }
        if(isset($_POST['quarantine']))
        { 
         $res6= mysqli_query($conn, "DELETE FROM `quarantine` WHERE `quarantine`.`number` = '$number'");
        } 
         if(isset($_POST['finance']))
         {
        $res7= mysqli_query($conn, "DELETE FROM `finance` WHERE `finance`.`number` = '$number'");
         }
         if(isset($_POST['oximeter']))
         {
          $res8= mysqli_query($conn, "DELETE FROM `oximeter` WHERE `oximeter`.`number` = '$number'");
         }
         $conn->close();
         header('Location: Report-response_page.php');
          exit();
?>
        