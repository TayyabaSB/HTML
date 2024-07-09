<html>
    <head>
        <title>PHP Test 1 </title>
    <head>
    <body>
        <h1> PHP Test 1</h1>
        <?php
             $percentage = 100; // Change this value to test your code
             if ($percentage >= 70) {
                echo "First class Honours"
             } elseif ($percentage >= 60) {
                echo "Upper Second Class Honours (2:1)";         
             } elseif ($percentage >=50) {
                echo "Upper Second Class Honours (2:2)";
             } elseif ($percentage >=40) {
                echo "Third Class Honours"
             } else {
                 echo "Fail"
             }
        ?>
    </body>
</html>
