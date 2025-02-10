<?php

echo "Hello World with echo!<br>";
print "Hello World with print!<br>";
$days = 288;
$message = "Все выходят на работу";

echo "<br><b>Echo arguments</b> ", $days," ",$message,"<br>";
print "<b>Print concat</b> " . $days . " " . $message . "<br>";

$messageWithDays = $days . " " . $message . "<br>";
$messageWithDays1 = "$days $message";
print ("<b>Concat - </b>" . $messageWithDays);
print "<b>Ghelemele - </b>" . $messageWithDays1;

?>
