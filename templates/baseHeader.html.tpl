<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>{block name=pageTitle}{/block}</title>
    {foreach $cssFile as $css}
      <link rel="stylesheet" href="{$css}" />
    {/foreach}
  </head>
  <body>
