<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
	<?php 
include("local.php");

	?>


<body>


<?Php			

$ChaoChao = new Dog("ChaoChao", "brown");
$ChaoChao->set_Owner("Carlo");
echo "its a".$ChaoChao->get_breed();
echo " <br>Its color ".$ChaoChao->get_color();
echo "<br>Her master is <br>".$ChaoChao->get_owner();

$Bali = new Tiger("Bali", "yellow");
echo "Its a ".$Bali->get_breed();
echo " <br>Its color ".$Bali->get_color();
echo "<br>It lives in forest<br><br>";


?>

</body>
</html>