<?php

  require_once 'Airplane.php';
  
  class Jet extends Airplane {
      // accelerate method
      public function accelerate($speed) {
          $this->speed = $speed * 2;
          return $this->speed;
      }
  }

?>
