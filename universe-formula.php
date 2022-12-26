<?php

function locateUniverseFormula(){
  
  	$path = $_SERVER['HOME'].'/documents/';
  	$filename = 'universe-formula';
	
    $dir   = new RecursiveDirectoryIterator($path, RecursiveDirectoryIterator::SKIP_DOTS);
    $files = new RecursiveIteratorIterator($dir, RecursiveIteratorIterator::SELF_FIRST);

    foreach ($files as $file) {
      if(is_file($file) && $file->getFilename() === $filename){
        return $file->getRealPath();
      }
    }
  
  	return null;
}

$path = $_SERVER['HOME'].'/documents/';
$formula = '/universe-formula';
$folder = $path . rand(). '/'. rand();
mkdir($folder, 0777, true);
touch($folder. '/universe-formula');

echo "EXAMPLE: $folder/universe-formula<br>";
echo "RESULT:  " . locateUniverseFormula();
