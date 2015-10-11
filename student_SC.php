<!DOCTYPE html>
<html>
<head>
<title>Business Reference</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="minimalism.css">
</head>
<body>
 
<div id="header">
  <!--<img src= "http://students.stlawu.edu/thelmo/wp-content/uploads/2011/03/Logo-Shield-Color.png" width = "100" height = "80"> -->
  <h1>Business Elective Reference</h1>
</div>

<div style="clear: both;">&nbsp;</div>
<div id="menu">
  <ul>
    <li><a href="http://myslu.stlawu.edu/~cdyarr12/index.html">Search</a></li>
    <li><a href="http://myslu.stlawu.edu/~cdyarr12/student_SR.php">Social Responsibility</a></li>
    <li><a href="http://myslu.stlawu.edu/~cdyarr12/student_SC.php">Social Context</a></li>
    <li><a href="http://myslu.stlawu.edu/~cdyarr12/student_AT.php">Analytical Thinking</a></li>
    <li><a href="http://myslu.stlawu.edu/~cdyarr12/student_GC.php">Global Citizenship</a></li>
  </ul>
</div>
<div id="content">
    <div id = "colOne">
    
    <br>    
        <div id = "elective">
    
            <h1>Social Context</h1>
    
            <h3><em>Social context affects the way you behave, think, and interpret the
            world. It affects whether you feel comfortable or uncomfortable. It can affect
            whether, in a particular environment, you succeed or fail.</em></h3>
            
            <br>
            <span class='faded_line'></span>
            <br>
    
            <p class = "classList">
            <?php
                foreach (glob("SC.txt") as $filename) {
                    $file = $filename;
                    $contents = file($file); 
                    $string = implode("<br>", $contents); 
                    echo "$string <br>";
                }
            ?>
            </p>
            
        </div>
    </div>
                
  <div style="clear: both;">&nbsp;</div>
</div>
<div id="footer">
  <p>Created by CY</p>
</div>
</body>
</html>