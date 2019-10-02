<?php
echo "> Voornaam\n";

$line = readline("> ");
if (!empty($line)) {
  readline_add_history($line);
}
echo "> Achternaam\n";

$jeff = readline("> ");
if (!empty($jeff)) {
  readline_add_history($jeff);
}



echo '> Naam: ' . $line ;
echo ' ' . $jeff;
?>