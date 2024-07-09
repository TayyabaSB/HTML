<html>
    <head>
        <title>PHP Test 1 </title>
    <head>
    <body>
        <h1> PHP Test 1</h1>
        <?php
             $a = 1;
             functoion scope_demo() {
                echo  ($a); // Error
                $a = 2;
                $b = 3;
                echo($a); // Outputs 2
             }

             echo($a); // Outputs 1
             scope_demo();
             echo($a); // Outputs 1
             echo($b); // Error
        ?>
    </body>
</html>
