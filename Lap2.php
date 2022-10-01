<!DOCTYPE html>
<html>
	<head>
		<title> HTML Tags in PHP </title>
	</head>
	<body>
		
		<?php
			echo "<br>";
			echo "<h1>"."This is a header"."</h1>";
		    echo "<p>"."This is a paragraph"."</p>";
            $n  = 1;
            
            $s  ="1";
            
            $n1 = $n + $s; 
            
            $n2 = $n1."10 little penguins";
            
            $n3 = "hello";

            $n4 = "world";

            $n5 = $n3.$n4;
            
            

            echo "$n<br>";
            echo "$s<br>";
            echo "$n1<br>";
            echo "$n2<br>";
            echo "$n3<br>";
            echo "$n4<br>";
            echo "$n5<br>";
          
            ?>
	</body>
</html>
