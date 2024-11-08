<h3>try catch</h3>
<?php
    try{
        $x = 10 / 0;
    }catch(DivisionByZeroError $e){
        echo 'เกิดข้อผิดพลาดไม่สามารถหารด้วย 0 ได้';
    }catch(TypeError $e){
        echo 'เกิดข้อผิดพลาดไม่สามารถหารด้วยตัวอักษรได้';
    }catch(Throwable $e){
        echo 'เกิดข้อผิดพลาด ไม่สามาถดำเนินการได้'.$e->getMessage();
    }
?>