<?php echo "Hello World !";?>
<?php
for($i=1;$i<=5;$i++){
	for($j=1;$j<=$i;$j++){
		echo "*";
	}
	echo "<br>";
}
$sachin = "sachin";
$kumar = "kumar";
$fullName = $sachin . " " . $kumar;
echo $fullName;

?>
