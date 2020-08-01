<?php
$linksFile = fopen("links.txt", "w")

if (empty($_POST["linkname"])) {
  $errorMSG = "<p>Text was empty</p>";
} else {
  $linkname = $_POST("linkname");
}

if (empty($_POST["link"])) {
  $errorMSG = "<p>Text was empty</p>";
} else {
  $linkname = $_POST("link");
}

if(!file_exists('links.txt')) {
  if(mkdir('links.txt', 0777, true)) {
    die('Success');
  } else {
    die('Failed');
  }
}

?>
