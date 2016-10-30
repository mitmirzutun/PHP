<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="generator" content="PSPad editor, www.pspad.com">
  <title>Tage zum Anklicken</title>
  </head>
  <body>
  <style>
  table {
  border-spacing: 0;
  }
  td {
  width: 200px;
  height: 200px;
  }
  </style>
  <form>
  <input type="button" value="Tag 1" onclick="tableBlack(e1)">
  <input type="button" value="Tag 2" onclick="tableBlack(e2)">
  <input type="button" value="Tag 3" onclick="tableBlack(e3)">
  <input type="button" value="Tag 4" onclick="tableBlack(e4)">
  <input type="button" value="Tag 5" onclick="tableBlack(e5)">
  <input type="button" value="Tag 6" onclick="tableBlack(e6)">
  <input type="button" value="Tag 7" onclick="tableBlack(e7)">
  <input type="button" value="Tag 8" onclick="tableBlack(e8)">
  </form>
  <table border=2><tr><td id="e1"></td><td id="e2"></td><td id="e3"></td></tr>
  <tr><td id="e4"></td><td>Letzte acht Stunden</Td><td id="e5"></td></tr>
  <tr><td id="e6"></td><td id="e7"></td><td id="e8"></td></tr></table>
  <script>
  var e1 = "e1", e1t = false;
  var e2 = "e2", e2t = false;
  var e3 = "e3", e3t = false;
  var e4 = "e4", e4t = false;
  var e5 = "e5", e5t = false;
  var e6 = "e6", e6t = false;
  var e7 = "e7", e7t = false;
  var e8 = "e8", e8t = false;
  
  function tableBlack(ele) {
    if (ele == "e1") {
      elet = e1t;
    } else if (ele == "e2") {
      elet = e2t;
    } else if (ele == "e3") {
      elet = e3t;
    } else if (ele == "e4") {
      elet = e4t;
    } else if (ele == "e5") {
      elet = e5t;
    } else if (ele == "e6") {
      elet = e6t;
    } else if (ele == "e7") {
      elet = e7t;
    } else if (ele == "e8") {
      elet = e8t;
    }
    if (elet===false) {
      document.getElementById(ele).style.backgroundColor="black";
      if (ele == "e1") {
        e1t = true;
      } else if (ele == "e2") {
        e2t = true;
      } else if (ele == "e3") {
        e3t = true;
      } else if (ele == "e4") {
        e4t = true;
      } else if (ele == "e5") {
        e5t = true;
      } else if (ele == "e6") {
        e6t = true;
      } else if (ele == "e7") {
        e7t = true;
      } else if (ele == "e8") {
        e8t = true;
    }
    } else if (elet===true) {
      document.getElementById(ele).style.backgroundColor="white";
      
      if (ele == "e1") {
        e1t = false;
      } else if (ele == "e2") {
        e2t = false;
      } else if (ele == "e3") {
        e3t = false;
      } else if (ele == "e4") {
        e4t = false;
      } else if (ele == "e5") {
        e5t = false;
      } else if (ele == "e6") {
        e6t = false;
      } else if (ele == "e7") {
        e7t = false;
      } else if (ele == "e8") {
        e8t = false;
      }
    }
    
  }
  </script>
  </body>
</html>
