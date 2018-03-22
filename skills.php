<?php

$myfile = fopen("skills.txt", "r") or die("Unable to open file!");
$lines = fread($myfile, filesize("skills.txt"));
fclose($myfile);

$skills = preg_split("/(\r?\n|\r\n?)/", $lines);

$skill = array_rand($skills);
echo $skills[$skill];

