<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>ตรวจสอบเกรด</h1>
<form action='<?=$_SERVER['PHP_SELF'];?>' method='POST'>
    กรอกคะแนน <br/>
    1.<input type='text' name='score1'><br/>
    2.<input type='text' name='score2'><br/>
    3.<input type='text' name='score3'><br/>
    4.<input type='text' name='score4'><br/>
    <hr/>
    <input type='submit' name="submit" value='ตัดเกรด'>
</form>

<?php 
    isset( $_POST['score1'] ) ? $score1 = $_POST['score1'] : $score1 = "";
    isset( $_POST['score2'] ) ? $score2 = $_POST['score2'] : $score2 = "";
    isset( $_POST['score3'] ) ? $score3 = $_POST['score3'] : $score3 = "";
    isset( $_POST['score4'] ) ? $score4 = $_POST['score4'] : $score4 = "";

    if(isset($_POST['submit'])){
        if($score1>25 or $score2> 25 or $score3>25 or $score4>25){
            echo "กรอกเกินนะจ๊ะ";
        }
        else{
            $score = $score1 + $score2 + $score3 + $score4;
            if( $score > 0 ) {
                $grade = "F";
            if( $score >= 90 ) {
                $grade = "A";
            } else if( $score >= 80 ) {
                $grade = "B";
            } else if( $score >= 70 ) {
                $grade = "C";
            } else if( $score >= 60 ) {
                $grade = "D";
            } else {
                $grade = "F";
            }

            echo "คะแนน {$score} คุณได้รับเกรด {$grade}";
            }
        }
     }
 ?>


</body>
</html>