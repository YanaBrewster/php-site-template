<?php
$title = "Varieties";
$description ="Description of Varieties of Coffee page";


require("templates/header.php");
//require("templates/nav.php");


?>


<main class="px-5">
	<div class="row coffee">
	<div class="col mt-5">
		<img src="images/coffee3.png" alt="Coffee" class="img-thumbnail" />
	</div>
	<div class="col mt-5">
    <h2 class="mb-5">Varieties of Coffee</h2>
		<p >Coffee varieties are the diverse subspecies derived through selective breeding or natural selection of coffee plants. While there is tremendous variability encountered in both wild and cultivated coffee plants, there are a few varieties and cultivars that are commercially important due to various unique and inherent traits such as disease resistance and fruit yield. These unique traits are what producers use to select breeds when developing crops. Therefore, at a micro level, breed selection is critical to the success of a producer and is one of the key components of cup quality.<br><br>
		</p>
	</div>
</div>

<hr class="my-5">
<div class="row">

  <?php 	require("templates/card.php"); ?>


<?php
require("templates/footer.php");

?>
