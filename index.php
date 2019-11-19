<?php
	include("functions.php");
	include("views/header.php");
	if($_GET["page"] == 'about') {
       include("views/about.php");
    } else if($_GET["page"] == 'contact') {
       include("views/contact.php");
    } else {
      include("views/home.php");
    }
	include("views/footer.php");
?>