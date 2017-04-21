<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="generator" content="PSPad editor, www.pspad.com">
  <title>Quiz</title>
  </head>
  <body>
  <?php
    $index = 0;
    $questions=array("Who is Putin", "Which Position had Russia in the two World Wars?", "Who is Trump?");
    $answers=array(array("President of Russia","President of the US","Dictator of Russia"), array("Enermy of Germany", "Ally of Germany","Neural to Germany"), array("presidential canidate of the US", "presidential canidate of Germany", "President of Germany"));
    $correct_answers=array("Dictator of Russia", "presidential canidate of the US");
    foreach($questions as $value => $Frage) {
      echo "$Frage<br>";
      $antwort = "antwort$index";
      $Antwort1 = "";
      $Antwort2 = "";
      $Antwort3 = "";
      foreach($answers[$value] as $Antwort){
        if ($Antwort1 == "") {
          $Antwort1 = $Antwort;
        } elseif ($Antwort2 == "") {
          $Antwort2 = $Antwort;
        } elseif ($Antwort3 == "") {
          $Antwort3 = $Antwort;
        }
      }
      echo "<form action=\"/milan/Quiz/Quiz1.php\" method=\"post\">
      <select name=$antwort>
      <option>$Antwort1</option>
      <option>$Antwort2</option>
      <option>$Antwort3</option>
      </select>
      <input type=\"submit\" value=\"&Uuml;berpr&uuml;fen\"></form><br>";
      echo "$_POST[$antwort]<br>";
      if (!empty($_POST[$antwort])) {
        switch($_POST[$antwort]) {
          case $Antwort1:
            if (!$Antwort1 == $correct_answers[$value]) {
              echo "This was the wrong answer.<br>";
            } else {
              echo "This was the right answer.<br>";
            }break;
          case $Antwort2:
            if (!$Antwort2 == $correct_answers[$value]) {
              echo "This was the wrong answer.<br>";
            } else {
              echo "This was the right answer.<br>";
            }break;
          case $Antwort3:
            if (!$Antwort3 == $correct_answers[$value]) {
              echo "This was the wrong answer.<br>";
            } else {
              echo "This was the right answer.<br>";
            }break;
         }
      }
      $index++;
    }
    ?>
  </body>
</html>
