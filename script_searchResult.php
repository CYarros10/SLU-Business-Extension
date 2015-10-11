<?php
                    if(isset($_GET['submit'])){
                        
                    echo "<span class='faded_line'></span>";


                    $selection=$_GET['dropdown'];
                    $classNumber = "{$_GET['classNumber']}";
                    
                    if ($selection == "" and $classNumber != "") {
                         $selection .= $classNumber;
                    }
                    
                    else {
                         $selection .= " $classNumber";
                    }
                    
                    $srFile = file('SR.txt');
                    $scFile = file('SC.txt');
                    $atFile = file('AT.txt');
                    $gcFile = file('GC.txt');
                    
                    $srItems = array();
                    $scItems = array();
                    $atItems = array();
                    $gcItems = array();
                    
                    $found = false;
                    $srFind = false;
                    $scFind = false;
                    $atFind = false;
                    $gcFind = false;
                    
                    if ($selection != " ") {
                                        echo "<h2 align = 'left'>Search Results for: '$selection' </h2>";
                    }
                    //--------------------------------------
                    // Social Responsibility Scan
                    
                    $found = false;
                    
                    foreach($srFile as $line) {
                        if(strpos($line, $selection) !== false) {
                            $found = true;
                            $srFind = true;
                            array_push($srItems, $line);
                        } 
                    }
                    
                    //--------------------------------------
                    // Social Context Scan
                    
                    foreach($scFile as $line) {
                        if(strpos($line, $selection) !== false) {
                            $found = true;
                            $scFind = true;
                            array_push($scItems, $line);
                        }
                    }
                    
                    //--------------------------------------
                    // Analytical Thinking Scan
                      
                    foreach($atFile as $line) {
                        if(strpos($line, $selection) !== false) {
                            $found = true;
                            $atFind = true;
                            array_push($atItems, $line);
                        }
                    }
                    
                    //--------------------------------------
                    // Global Citizenship Scan
                                      
                    foreach($gcFile as $line) {
                        if(strpos($line, $selection) !== false) {
                            $found = true;
                            $gcFind = true;
                            array_push($gcItems, $line);
                        }
                    }
                    
                    //--------------------------------------
                    // Item Output
                    
                    if ($srFind == true) {
                        echo "<h3>Social Responsibility</h3>";
                        echo implode('<br>', $srItems);
                    }
                    
                    if ($scFind == true) {
                        echo "<h3>Social Context</h3>";
                        echo implode('<br>', $scItems);
                    }
                    
                    if ($atFind == true) {
                        echo "<h3>Analytical Thinking</h3>";
                        echo implode('<br>', $atItems);
                    }
                    
                    if ($gcFind == true) {
                        echo "<h3>Global Citizenship</h3>";
                        echo implode('<br>', $gcItems);
                    }
                    
                    if ($found == false) {
                        echo "No Results Found.";
                    }    
                    
                    echo "<br>";             
                    }
                ?>