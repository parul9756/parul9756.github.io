<?php
$db_selected  = mysqli_connect('localhost','parul','patel');
mysqli_select_db($db_selected, 'hope');
return $db_selected;
?>
