<?php
$title = "Varieties";
$description ="Description of Varieties of Coffee page";
require("templates/header.php");
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


		<?php
$image="A_small_cup_of_coffee.JPG";
$type="Long Black";
$desc="A long black is a style of coffee commonly found in Australia and New Zealand. It is similar to an Americano, but with a stronger aroma and taste.A long black is made by pouring a double-shot of espresso or ristretto over hot water. Typically about 100 - 120 milliliters of water is used (3.5 - 4 ounces) but the measurement is considered to be flexible to individual taste.";
		?>

  <?php 	require("templates/card.php"); ?>

		<?php
$image="Cafe-Au-Lait.jpg";
$type="Café au lait";
$desc="Café au lait; French for \"coffee with milk\") is coffee with hot milk added. It differs from white coffee, which is coffee with cold milk or other whiteners added.";
		?>

  <?php 	require("templates/card.php"); ?>

	<?php
$image="caffe_americano.jpg";
$type="Caffè Americano";
$desc="Caffè Americano (also known as Americano or American; Italian pronunciation; Spanish: café americano, literally American coffee) is a type of coffee drink prepared by diluting an espresso with hot water, giving it a similar strength to, but different flavor from, traditionally brewed coffee.";
	?>

<?php 	require("templates/card.php"); ?>

<?php
$image="galao_kaffee_portugal.jpg";
$type="Galão";
$desc="";
?>

<?php 	require("templates/card.php"); ?>

<?php
$image="irish coffee.jpg";
$type="Irish Coffee";
$desc="Irish coffee (Irish: caife Gaelach) is a cocktail consisting of hot coffee, Irish whiskey, and sugar, stirred, and topped with cream. The coffee is drunk through the cream.";
?>

<?php 	require("templates/card.php"); ?>

<?php
$image="white-chocolate-peppermint-mocha.jpg";
$type="Peppermint White Chocolate Mocha";
$desc="Rich espresso meets white chocolate sauce, peppermint-flavored syrup and steamed milk. Topped with sweet whipped cream and dark chocolate curls.";
?>

<?php 	require("templates/card.php"); ?>

</div>
</div>


	  <!-- <div class="col-4">
	    <div class="card border-0 mx-2 my-2">
	      <img src="images/Coffee/A_small_cup_of_coffee.JPG" class="card-img-top" alt="coffee">
	      <div class="card-body">
	        <h3>Long Black</h3>
	        <p class="card-text">A long black is a style of coffee commonly found in Australia and New Zealand. It is similar to an Americano, but with a stronger aroma and taste.A long black is made by pouring a double-shot of espresso or ristretto over hot water. Typically about 100 - 120 milliliters of water is used (3.5 - 4 ounces) but the measurement is considered to be flexible to individual taste.</p>
	      </div>
	    </div>
	  </div> -->

	  <!-- <div class="col-4">
	    <div class="card border-0 mx-2 my-2">
	      <img src="images/Coffee/Cafe-Au-Lait.jpg" class="card-img-top" alt="coffee">
	      <div class="card-body">
	          <h3>Café au lait</h3>
	        <p class="card-text">Café au lait; French for "coffee with milk") is coffee with hot milk added. It differs from white coffee, which is coffee with cold milk or other whiteners added.</p>
	      </div>
	    </div>
	  </div> -->

	  <!-- <div class="col-4">
	    <div class="card border-0 mx-2 my-2">
	      <img src="images/Coffee/caffe_americano.jpg" class="card-img-top" alt="coffee">
	      <div class="card-body">
	          <h3>Caffè Americano</h3>
	        <p class="card-text">Caffè Americano (also known as Americano or American; Italian pronunciation; Spanish: café americano, literally American coffee) is a type of coffee drink prepared by diluting an espresso with hot water, giving it a similar strength to, but different flavor from, traditionally brewed coffee.</p>
	      </div>
	    </div>
	  </div> -->

	  <!-- <div class="col-4">
	    <div class="card border-0 mx-2 my-2">
	      <img src="images/Coffee/galao_kaffee_portugal.jpg" class="card-img-top" alt="coffee">
	      <div class="card-body">
	        <h3>Galão</h3>
	        <p class="card-text">Galão ([ɡaˈlɐ̃õ]) is a hot drink from Portugal made of espresso and foamed milk. Similar to caffè latte or café au lait, it consists of about one quarter coffee and three quarters foamed milk. It is served in a tall glass, as opposed to the smaller garoto that is served in a demitasse. </p>
	      </div>
	    </div>
	  </div> -->
<!--
	  <div class="col-4">
	    <div class="card border-0 mx-2 my-2">
	      <img src="images/Coffee/irish coffee.jpg" class="card-img-top" alt="coffee">
	      <div class="card-body">
	        <h3>Irish Coffee</h3>
	        <p class="card-text">Irish coffee (Irish: caife Gaelach) is a cocktail consisting of hot coffee, Irish whiskey, and sugar, stirred, and topped with cream. The coffee is drunk through the cream.</p>
	      </div>
	    </div>
	  </div> -->

	  <!-- <div class="col-4">
	    <div class="card border-0 mx-2 my-2">
	      <img src="images/Coffee/white-chocolate-peppermint-mocha.jpg" class="card-img-top" alt="coffee">
	      <div class="card-body">
	        <h3>Peppermint White Chocolate Mocha</h3>
	        <p class="card-text">Rich espresso meets white chocolate sauce, peppermint-flavored syrup and steamed milk. Topped with sweet whipped cream and dark chocolate curls.</p>
	      </div>
	    </div>
	  </div>
	</div>
	</main> -->


<?php
require("templates/footer.php");

?>
