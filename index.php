<?php
/*
        The include and require methods, finds the file you are wanting and places it where you call
        the function.
        The difference between include and require is, with include, if it can't find the file you are
        wanting, it will still continue to render everything bellow it.
        With require, it will stop running, and nothing bellow the call will be rendered.
        So you need to have a think about if what you are wanting to include is important for the site
        or not. If it is, then use require, if not, use include.
    */

    // include("templates/header.php");

$title="Home";
$description = "Description of the Home page";
require("templates/header.php");
//require("templates/nav.php");
?>


<main class="px-5 py-5">
	<h1 class="mb-5"> Home Page </h1>


	<h2>Welcome to the coffee lovers website!</h2>

	<div class="banner mt-5 mb-5">
		<img src="images/banner.jpg" alt="Coffee Banner" class="img-fluid w-100 "/>
	</div>

</main>



<?php

require("templates/footer.php");



?>
