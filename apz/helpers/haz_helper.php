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

function bulan_definer($bulan){
  switch($bulan){
    case 1: return "Januari"; break;
    case 2: return "Februari"; break;
    case 3: return "Maret"; break;
    case 4: return "April"; break;
    case 5: return "Mei"; break;
    case 6: return "Juni"; break;
    case 7: return "Juli"; break;
    case 8: return "Agustus"; break;
    case 9: return "September"; break;
    case 10: return "Oktober"; break;
    case 11: return "November"; break;
    case 12: return "Desember"; break;
  }
}

function status_definer($status){
  switch($status){
    case 'N': return "Belum ditanggapi"; break;
    case 'Y': return "Proses"; break;
    case 'D': return "Selesai"; break;
    default: return "Status tidak diketahui"; break;
  }
}

// Level definition
function level_definer($lvl){
  switch($lvl){
    case 1: return 'Admin'; break;
    case 2: return 'Software'; break;
    case 3: return 'Jaringan'; break;
    case 4: return 'Embedded'; break;
    case 5: return 'Multimedia'; break;
    case 6: return 'Unit'; break;
    default: return 'Not Defined'; break;
  }
}