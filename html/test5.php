<html>
    <head>
        <title>PHP Test 1 </title>
    <head>
    <body>
        <h1> PHP Test 1</h1>
        <?php
             function add_numbers($num1, $num2) {
                return $num1 + $num2;
             }

             $sum = add_numbers(3,8);
             echo($sum); // Outputs 11
        ?>
    </body>
</html> 
