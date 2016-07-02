<?php 
  
/**
* Basic Blog page model
*/

class BlogPage extends Page {
  
  protected $futureChildren;
  protected $pastChildren;
  
  public function futureChildren() {
    if (!isset($this->futureChildren)) {
      $this->futureChildren = $this->children()->visible()->filterBy('date', '>=', strtotime('midnight'));
    }
    return $this->futureChildren;
  }
  
  public function hasFutureChildren() {
    return $this->futureChildren()->count() > 0;
  }
  
  public function pastChildren() {
    if (!isset($this->pastChildren)) {
      $this->pastChildren = $this->children()->visible()->filterBy('date', '<', strtotime('midnight'));
    }
    return $this->pastChildren;
  }
  
  public function hasPastChildren() {
    return $this->pastChildren()->count() > 0;
  }
  
}