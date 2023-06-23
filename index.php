<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
<h1>La manipulation des fichiers en php</h1>
  <h2>A retenir</h2>
    <p>
      PHP offre dse fonctions permettant la gesttion de répertoires, ainsi que leurs droits grace aux fonctions :
      * mkdir() pour la création d'un répertoire,
      * rmdir() pour la suppression d'un répertoire,
      * is_dir() pour détérminer s'il s'agit d'un répertoire ou non.
      * scandir() pour récupérer le contenu d'un dossier.
    </p>
    
    <?php 
$users =['bill' , 'bob' , 'joe'];
$users =['mathilde' , 'nicolas' , 'frank'];

foreach ($users as $user) {
  if(!is_dir($user)){
    mkdir(strtolower($user));
  }
}
$directories =scandir('.');
foreach($directories as $directory) {
  if($directory !== "." && $directory !== '..' && is_dir($directory) && !in_array($directory, $users)) {
      rmdir($directory);
  }
}

    ?> 
    <h2>Ouvrir un fichier</h2>
    
<?php
var_dump(is_file('fichier.txt')); // true 
$result = fopen('fichier.txt');
var_dump($result); // resource(5) of type (stream)

// le code présenté ouvre le fichiher.txt présent dans le répertoire courant et affiche le résultat ontenu, qui est une ressource PHP de type stream.
?>

  </body>
</html>