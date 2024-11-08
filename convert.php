<h3>convert str to number</h3>
<?php
    $string ='12345';
    $number = (int)$string;
    $number += 10;
    echo $number;
?>

<h3>convert number to str</h3>
<?php
    $number = 12345;
    $string = (string) $number;

    echo $string;
?>