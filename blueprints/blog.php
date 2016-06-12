<?php if(!defined('KIRBY')) exit ?>

title: Blog
pages:
  template:
    - article
    - calendar
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
  future_headline:
    label: Blog Settings
    type: headline
  future_introduction:
    label: Introduction
    type:  textarea
  future_no_articles:
    label: No Post Message
    type:  textarea
  past_headline:
    label: Blog Archive Settings
    type: headline
  past_enabled:
    type: checkbox
    text: Enable Archive Section
  past_title:
    label: Archive Sub-Title
    type: text
  past_introduction:
    label: Introduction
    type: textarea
  past_no_articles:
    label: No Post Message
    type: textarea
