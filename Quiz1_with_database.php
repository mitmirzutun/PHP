<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="generator" content="PSPad editor, www.pspad.com">
  <title>Quiz</title>
  </head>
  <body>
  <?php
  $db = mysqli_connect("localhost","root","");
  mysqli_set_charset($db, "latin1");
  mysqli_select_db($db, "quiz");
  echo "<form action=\"html/quiz/Quiz1_with_database.php\" method=\"post\">
  <select name=antwort> ";
  $fragen_id = 1;
  $sql = "SELECT * FROM antworten WHERE $fragen_id = 1;";
  $result = mysqli_query($db, $sql);
  while ($row = mysqli_fetch_assoc($result)) {
    $antwortArray = [];
    $antwortArray[$row['antwort_id']] = $row['antwort_text'];
    echo "<option>$row[antwort_text] </option>";
  }
    echo " </select>
    <input type=\"submit\" value=\"&Uuml;berpr&uuml;fen\"></form><br>"; 
  
    ?>
  </body>
</html>
