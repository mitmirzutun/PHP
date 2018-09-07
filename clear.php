<?php
//Defining the files
$valueWhenTheresNoData = "";
$in = file("migr_asyappctza.tsv");
$out = fopen("migr_asyappctza_unpivot.csv", "w+");

//header in output file
fwrite($out, "citizen,sex,unit,age,asyl_app,geo,time,ammount\n");

$in_array_line1 = explode("\t",$in[0]);
//The year comes in in a faulty format, so correct it to the right one
for ($i = 1; $i < count($in_array_line1); $i++) {
  $year = "";
  for ($j = 0; $j < 4; $j++) {
    $year .= $in_array_line1[$i][$j];
  }
  $in_array_line1[$i] = $year;
}
for ($k = 1; $k < count($in); $k++) {
  $in_array_lineK = explode("\t",trim($in[$k],"\n"));
  for($i = 1; $i < count($in_array_line1); $i++){
    $data_out = $in_array_lineK[0] . "," . $year . ",";
    if ($in_array_lineK[$i] === ": " or $in_array_lineK[$i] === ": \n") {
      $data_out .= $valueWhenTheresNoData;
    } else {
      $data_out .= $in_array_lineK[$i];
    }
    $data_out .= "\n";
    fwrite($out, $data_out);
  }
}
fclose($out);
?>
