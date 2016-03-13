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
  $fragen_id = 1;
  $sql = "SELECT * FROM antworten WHERE $fragen_id = 1;";
  $result = mysqli_query($db, $sql);
  while ($row = mysqli_fetch_assoc($result)) {
    $antwortArray = [];
    $antwort[$row['antwort_id']] = $row['antwort_text'];
    echo "<p> Antwort $row[antwort_id] ist $row[antwort_text] </p>";
    
    #  echo "<form action=\"html/quiz/Quiz1_with_database.php\" method=\"post\">
    #  <select name=$antwort>
    #  <option>$Antwort1</option>
    #  <option>$Antwort2</option>
    #  <option>$Antwort3</option>
    #  </select>
    #  <input type=\"submit\" value=\"&Uuml;berpr&uuml;fen\"></form><br>"; 
  }
    ?>
  </body>
</html>
