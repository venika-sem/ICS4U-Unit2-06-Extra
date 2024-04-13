<?php

  require_once 'Airplane.php';
  require_once 'Jet.php';
  
  // Create an instance of Airplane
  $biplane = new Airplane();
  $planeSpeed = $biplane->setSpeed(212);
  echo "$planeSpeed\n";
  
  // Create an instance of Jet
  $boeing = new Jet();
  $jetSpeed = $boeing->setSpeed(422);
  
  // Accelerate the Jet
  for ($counter = 0; $counter < 4; $counter++) {
      $jetSpeed = $boeing->accelerate($jetSpeed);
      echo "$jetSpeed\n";
      if ($jetSpeed < 5000) {
          $jetSpeed = $boeing->accelerate($jetSpeed);
          echo "$jetSpeed\n";
      }
  }
  
  $planeSpeed2 = $biplane->setSpeed($planeSpeed * 8);
  echo "$planeSpeed2\n";
  
  echo "\nDone.";
?>
