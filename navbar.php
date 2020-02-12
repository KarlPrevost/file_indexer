<?php 
$adresse = $_SERVER['PHP_SELF'];
$adresseRoot = $_SERVER['DOCUMENT_ROOT'];
$adresseRootSlash = "/";
$relativeRootURL = "http://localhost";
echo "<a href = '".$relativeRootURL."'>localhost</a> >>>> <a href = '".$adresse."'>$adresse</a></br>";



?>