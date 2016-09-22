<?php if(!defined('KIRBY')) exit ?>

title: Artikel
pages: false
files: true
icon: newspaper-o
fields:
  title:
    label: Title
    type:  text
  date:
    label: Date
    type: date
    required: true
  text:
    label: Text
    type:  textarea
  events:
    label: Events
    type: structure
    entry: >
      <strong>{{summary}}</strong><br>
      {{description}}<br>
      Beginning: {{begin_date}} {{begin_time}}<br>
      End: {{end_date}} {{end_time}}
    fields:
      summary:
        label: Summary
        type: text
      description:
        label: Description
        type: textarea
        size: small
      begin_date:
        label: Beginning date
        type: date
        format: MM/DD/YYYY
      begin_time:
        label: Beginning time
        type: time
        interval: 15
      end_date:
        label: Ending date
        type: date
        format: MM/DD/YYYY
      end_time:
        label: Ending time
        type: time
        interval: 15
