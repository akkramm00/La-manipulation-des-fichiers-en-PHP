<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
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


  </body>
</html>