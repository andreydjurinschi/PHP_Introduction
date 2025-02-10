<?php

echo "Hello World with echo!<br>", "asdasdasdsa";
print "Hello World with print!<br>";
$days = 288;
$message = "Все выходят на работу";

echo "<br><br>HI " . $days,$message;

$messageWithDays = $days . " " . $message . "<br>";
$messageWithDays1 = "$days $message";
print ("<b>First - </b>" . $messageWithDays . $days);
print "<b>Second - </b>" . $messageWithDays1;

?>
