<?php if(!defined('KIRBY')) exit ?>

title: Blog
pages:
  template:
    - article
  num:
    mode: date
    field: date
  sort: flip
files: false
icon: rss
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  textarea