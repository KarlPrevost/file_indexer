<?php
echo 'coucou<br>';
include 'navbar.php';

echo '<br><br><br>';
$adresse = $_SERVER['PHP_SELF'];
echo $adresse;

$iterator = new DirectoryIterator('/');
// On boucle sur la liste des documents retournés dans l'itérateur
foreach($iterator as $document){
      echo 'Nom du document: '.$document->getFilename().'<br>';
}

echo '<br><br><br>';

$dossier = '/';
$contenu_dossier = scandir($dossier);
foreach($contenu_dossier as $document2){
      echo 'Nom du document: '.$document2.'<br>';
}


echo '<br><br><br>';
$adresse = $_SERVER['PHP_SELF'];
echo $adresse;
var_dump($adresse);

echo '<br><br><br>';


$result = shell_exec("tree");
    echo mb_convert_encoding($result, "UTF-8", "CP850");

    echo '<br><br><br>';


?>


<?php

// Arborescence de gauche
function mkmap($dir){
    echo "<ul>";   
    $folder = opendir ($dir);

    while ($file = readdir ($folder)) {   
        if ($file != "." && $file != "..") {           
            $pathfile = $dir.'/'.$file;           
            echo "<li><a href=$pathfile>$file</a></li>";           
            if(filetype($pathfile) == 'dir'){               
                mkmap($pathfile);               
            }           
        }       
    }
    closedir ($folder);    
    echo "</ul>";   
}
?>

<?php mkmap($_SERVER['DOCUMENT_ROOT']); ?>
