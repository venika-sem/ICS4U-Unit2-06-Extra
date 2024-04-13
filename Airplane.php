<?php

  class Airplane {
      public $speed;
  
      public function __construct($speed = 0) {
          $this->speed = $speed;
      }
  
      // set speed method
      public function setSpeed($speed) {
          $this->speed = $speed;
          return $this->speed;
      }
  }
  
?>
