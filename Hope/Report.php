<!DOCTYPE html>
<html>
<head>
	<title>Delete Record</title>
	<!-- <link rel="stylesheet" type="text/css" href="C:\Users\user\Desktop\HOPE\Report-response_page.html"> -->
	<style type="text/css">
		.Report
		{
			width: 1250px;
			height: 800px;
			margin-left: 230px;
			background-color: #5c0000;
			
		}
		h2
		{
			text-align: center;
		}
	.b1
{
	width: 250px;
	height: 70px;
	font-size: 25px;
    color: white;
	border: 2px white solid;
	background-color: transparent;
	border-color: white;
	border-radius: 20px;
	padding: 10px 10px 10px 10px;
	margin-right: 20px;
	margin-left: 20px;
    text-decoration-color: white;    

}
.big_b1
{
	margin-top: 35px;
  margin-left: 120px;
}
.big_b2
{
	margin-top: 80px;
  margin-left: 150px;
}
.b1:hover
{
	background-color: white;
	border-color: white;
	color: #000000;
	
}
h3
{
	color: white;
	text-align: center;
}
.input
{
 margin-left: 550px;
}
.DELETE button
{
	width: 150px;
	height: 50px;
	border:2px #3090C7;
	font-size: 30px;
	color:white;
	border-radius: 25px;
background-color: #3090C7;
    margin-left: 570px;
margin-top: 90px;
text-align: center;
}
.DELETE a
{
	text-decoration:none;
	color: white;
	font-size: 25px;

}

	</style>
</head>
<body>
	<h2>*Please fill the form below to remove yourself from the services you select*</h2>
	<form action="./report-action.php" method="post">

<div class="Report">
   <h3>Please select the Location with which you have registered yourself</h3><br>
   <input type="text" name="location" class="input"><br>
   <h3>Phone number with which you have registered yourself</h3><br>
   <input type="number" name="number" class="input"><br>
   <h3>Alternate Phone number with which you have registered yourself</h3><br>
   <input type="number" name="Anumber" class="input"><br><br>
<h3 >Please select the resources you don't have</h3>
  <div class="big_b1">
   <span for="cylinder" class="b1"><input type="checkbox" id="cylinder" value="cylinder" name="cylinder">Oxygen Cylinder</span>
   <span for="source" class="b1"><input type="checkbox" id="source" value="source" name="source">Source for beds in hospital</span>
   <span for="petshelter" class="b1"><input type="checkbox" id="petshelter" value="petshelter" name="petshelter">Pet Shelter</span>
   <span for="medicines" class="b1"><input type="checkbox" id="medicines" value="medicines" name="medicines">Medicines</span>

  </div>
  <div class="big_b2">
 
   <span for="freefood" class="b1"><input type="checkbox" id="freefood" value="freefood" name="freefood">Free Food</span>
    <span for="quarantine" class="b1"><input type="checkbox" id="quarantine" value="quarantine" name="quarantine">Place for Quarantine</span>
    <span for="finance" class="b1"><input type="checkbox" id="finance" value="finance" name="finance">Financial Problems</span>
    <span for="oximeter" class="b1"><input type="checkbox" id="oximeter" value="oximeter" name="oximeter">Oximeter</span>
  </div>
  <div class="DELETE">
  	<button type="submit">DELETE</button>
  </div>
</div>
</form>
</body>
</html>