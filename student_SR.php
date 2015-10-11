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
    
            <h1>Social Responsibility</h1>
            <div class = "description">
            <h3><em>The idea that companies should embrace its social responsibilities and
            not be solely focused on maximizing profits. Social responsibility entails
            developing businesses with a positive relationship to the society which they
            operate in.</em></h3>
             </div>
            
            <br>
            <span class='faded_line'></span>
            <br>
    
            <p class = "classList">
            <?php
                foreach (glob("SR.txt") as $filename) {
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
