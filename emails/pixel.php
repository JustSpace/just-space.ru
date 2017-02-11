<?php
  header("Content-Type: image/png");
  $im = @imageCreateTrueColor(1, 1) or die("Невозможно инициализировать GD поток");
  $transparent = imageColorAllocate($im, 0, 0, 0);
  imageColorTransparent($im , $transparent);
  imagePng($im);
  imageDestroy($im);

  $remAddr = $_SERVER["REMOTE_ADDR"];
  $fromNameEmail = $_GET["email"];
  $dateDispatch = $_GET["date"];
  $addrport = $remAddr;

  $fl = $_SERVER["DOCUMENT_ROOT"] . "/logs/hits_ipaddress.txt";
  $flemail = $_SERVER["DOCUMENT_ROOT"] . "/logs/hits_emails.txt";
  $flcount = $_SERVER["DOCUMENT_ROOT"] . "/logs/hits.txt";
  $file = $_SERVER["DOCUMENT_ROOT"] . "/logs/emails/". $dateDispatch .".csv";

  $hFile = fopen($file, "a+") or die("File does not exist!");
  $fh = fopen($fl, "a+") or die("File does not exist!");
  $fhemail = fopen($flemail, "a+") or die("File does not exist!");
  flock($fh, LOCK_EX);
  flock($fhemail, LOCK_EX);
  flock($hFile, LOCK_EX);

  $file_array = file($flemail);
  $file_array[] = "";

  if(!in_array($fromNameEmail, $file_array)){
    fwrite($fhemail, $fromNameEmail . "\n");
    fwrite($fh, $addrport . "\n");
    fputcsv($hFile, [$fromNameEmail,$addrport]);

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
  flock($fhemail,LOCK_UN);
  flock($hFile,LOCK_UN);

  fclose($fh);
  fclose($fhemail);
  fclose($hFile);
?>
