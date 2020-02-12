<?php
  // Le .htaccess DOIT contenir la chaîne :
  // SetEnv ENV_HTACCESS_READING true

  if (array_key_exists ('ENV_HTACCESS_READING', $_SERVER))
  {
    echo "Yes ! .htaccess is read and used !!\n";
  }
  else
  {
    echo "BAD : The .htaccess is not read : add 'AllowOverride All' in your Apache configuration\n";
  }
?>

<?php
echo '<br> Bienvenue sur le HOME'

// mkmap 
// scandir
//directoryIterator
?>

<?php
$iterator = new DirectoryIterator('my_h5ai');
var_dump($iterator);
// On boucle sur la liste des documents retournés dans l'itérateur
foreach($iterator as $document){
      echo 'Nom du document: '.$document->getFilename().'<br>';
}



?>


