<h3>random_number</h3>
<?php
    echo rand(1,100);
?>
<h3>random_bytes encrypt hast code</h3>
<?php
    echo md5(uniqid(rand(),true))
?>