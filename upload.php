<?php

$path = $_FILES['path']['name'];
$tmp = $_FILES['path']['tmp_name'];

echo $path;
   // move_uploaded_file($tmp,"img/$path");

