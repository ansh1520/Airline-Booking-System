<?php
	$con=mysqli_connect('fdb21.awardspace.net','2707340_senson','nara15cs@','Sensor');
    $sql="INSERT INTO `Sensor` VALUES ('LDR','".$_GET["data1"]."','".$_GET["data2"]."')";
    mysql_query($sql);
?>