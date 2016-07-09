<?php 
  
/**
* Basic Blog page model
*/

class ArticlePage extends Page {

  public function date_time() {
    return '<time datetime="' . strftime('%Y-%m-%dT%H:%M:%S', $this->date()) .'">' . strftime('%d.%m.%y', $this->date()) . '</time>';
  }

}