<?php 
  
/**
* Basic Blog page model
*/

class ArticlePage extends Page {

  public function date_time() {
    if (c::get('date.handler') === 'strftime') {
      return '<time datetime="' . $this->date('%Y-%m-%dT%H:%M:%S') .'">' . $this->date('%d.%m.%y') . '</time>';
    } else {
      return '<time datetime="' . $this->date('Y-m-dTH:i:s') .'">' . $this->date('j.n.y') . '</time>';
    }
  }

}