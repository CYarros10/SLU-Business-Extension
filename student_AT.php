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
    
            <h1>Analytical Thinking</h1>
    
            <h3><em>Since it is often difficult to see the complete problem or the entire
            situation in which the problem exists given the complexities of business and
            technology today, the business analyst breaks the larger picture into smaller
            more manageable images to make examination and understanding easier.</em></h3>
            
            <br>
            <span class='faded_line'></span>
            <br>
    
            <p class = "classList">
            <?php
                foreach (glob("AT.txt") as $filename) {
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