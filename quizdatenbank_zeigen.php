<h3> Quizdatenbank anzeigen </h3>

<p>
<?php
$db = mysqli_connect("localhost","root","");
mysqli_set_charset($db, "latin1");
mysqli_select_db($db, "quiz");
echo "<h4> Themen: </h4>";
echo "<p> themen_id , themen_text </p>";
$sql = "SELECT * FROM themen";
$result = mysqli_query($db, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    echo "$row[themen_id] $row[themen_text] <br>\n" ;
}
echo "<h4> Fragen: </h4>";
echo "<p> fragen_id , themen_id, fragen_text, korrekte_antwort </p>";
$sql = "SELECT * FROM fragen";
$result = mysqli_query($db, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    echo "$row[fragen_id] $row[themen_id] $row[fragen_text] $row[korrekte_antwort] <br>\n" ;
}
echo "<h4> Antworten: </h4>";
echo "<p> fragen_id , antwort_id, antwort_text </p>";
$sql = "SELECT * FROM antworten";
$result = mysqli_query($db, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    echo "$row[antwort_id] $row[fragen_id] $row[antwort_text] <br>\n" ;
}
mysqli_close($db);
?>
</p>