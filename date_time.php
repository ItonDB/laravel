<h3>Date end time</h3>
<div>Date:<?php echo date('Y-m-d H:i:s'); ?>></div>
<div>Time: <?php echo time(); ?> </div>
<div>TimeStamp: <?php echo mktime(0,0,0,1,1,2024) ?></div>
<div>Date: <?php echo date('Y-m-d',mktime(0,0,0,5,15,2024)) ?></div>
<div>total day in this month: <?php echo date('t'); ?></div>
<div>Week number: <?php echo date('w'); ?></div>