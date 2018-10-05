<?php

namespace App\Models;

class CollectionTag {

  public $tag;

  public function __construct($tag)
  {
    $this->tag = $tag;
  }

  public function showFood() {
    echo $this->tag[0]->food;
    echo $this->tag[1]->drink;
  }
}