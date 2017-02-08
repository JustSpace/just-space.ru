<?php
  header('Content-Type: image/png');
  $im = @imageCreateTrueColor(1, 1) or die('Невозможно инициализировать GD поток');
  $transparent = imageColorAllocate($im, 0, 0, 0);
  imageColorTransparent($im , $transparent);
  imagePng($im);
  imageDestroy($im);

  $remAddr = $_SERVER["REMOTE_ADDR"];
  $addrport = $remAddr;
  $fl = $_SERVER["DOCUMENT_ROOT"] . "/logs/ipaddress.txt";
  $flcount = $_SERVER["DOCUMENT_ROOT"] . "/logs/hits.txt";

  $fh = fopen($fl, "a+") or die("File does not exist!");
  flock($fh, LOCK_EX);
  $file_array = file($fl);

  if(!in_array($addrport, $file_array)){
    fwrite($fh, $addrport);

    $fhcount = fopen($flcount, "a+") or die("File does not exist!");
    flock($fhcount, LOCK_EX);
    $count = fread($fhcount, filesize($fhcount)+100);
    $count++;
    ftruncate($fhcount, 0);
    fwrite($fhcount, $count);
    flock($fhcount, LOCK_UN);
    fclose($fhcount);
  }
  flock($fh,LOCK_UN);
  fclose($fh);
?>
