<?php
function purify_slug($r){
  $tags = ['.',',','/','\'','"','?','!','\\','=','+','*','&','^','%','$','@'];
  
  $r = str_replace($tags, '', $r);
  $r = str_replace(' ', '-', $r);
  $r = htmlspecialchars($r);
  $r = stripslashes($r);
  $r = trim($r);
  $r = strtolower($r);

  return $r;
}

function purify($r){
  $r = htmlspecialchars($r);
  $r = stripslashes($r);
  $r = trim($r);

  return $r;
}

function coba(){
  return "Hello World!";
}