
<link rel="stylesheet" type="text/css" href="styled-select.css">
<?php

$subject1 = $_POST['Subject1'];
$subject2 = $_POST['Subject2'];
$subject3 = $_POST['Subject3'];
$subject4 = $_POST['Subject4'];
$subject5 = $_POST['Subject5'];
$subject6 = $_POST['Subject6'];
$subject7 = $_POST['Subject7'];
$credits1 = $_POST['Credits1'];
$credits2 = $_POST['Credits2'];
$credits3 = $_POST['Credits3'];
$credits4 = $_POST['Credits4'];
$credits5 = $_POST['Credits5'];
$credits6 = $_POST['Credits6'];
$credits7 = $_POST['Credits6'];


$subject = (( $subject1*$credits1 ) + ( $subject2*$credits2 ) + ( $subject3*$credits3 )+ ( $subject4*$credits4 ) + ( $subject5*$credits5 ) + ( $subject6*$credits6 ) +( $subject7*$credits7 ));
$credits = $credits1 + $credits2 + $credits3+ $credits4+ $credits5+ $credits6+$credits7;
$cgpa = number_format($subject / $credits,2);

echo "<div>GPA- ".$cgpa."</div>";
if ( $cgpa> 3.49 )
 echo "<p><img src=\"high.png\" >";

else if ( $cgpa> 2.99 && $cgpa<= 3.49 )
  echo "<p><img src=\"med.png\" >";
else
	echo "<p><img src=\"low.png\" >";

?>
