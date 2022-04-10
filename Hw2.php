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
    กรุณากรอกคะแนน <br/>
    1.<input type='text' name='score1'><br/>
    2.<input type='text' name='score2'><br/>
    3.<input type='text' name='score3'><br/>
    4.<input type='text' name='score4'><br/>
    <hr/>
    <input type='submit' name="submit" value='ได้เกรด'>
</form>

<?php 
    isset( $_POST['score1'] ) ? $score1 = $_POST['score1'] : $score1 = "";
    isset( $_POST['score2'] ) ? $score2 = $_POST['score2'] : $score2 = "";
    isset( $_POST['score3'] ) ? $score3 = $_POST['score3'] : $score3 = "";
    isset( $_POST['score4'] ) ? $score4 = $_POST['score4'] : $score4 = "";

    if(isset($_POST['submit'])){
        if($score1>25 or $score2> 25 or $score3>25 or $score4>25){
            echo "กรอกเกิน";
        }
        else{
            $score = $score1 + $score2 + $score3 + $score4;

            if( $score >= 80 ){
                echo "ได้เกรด A";
            }else if( $score >= 75 && $score < 80 ){
                echo "ได้เกรด B+";
            }else if( $score >= 70 && $score < 75 ){
                echo "ได้เกรด B";
            }else if( $score >= 65 && $score < 70 ){
                echo "ได้เกรด C+";
            }else if( $score >= 60 && $score < 65 ){
                echo "ได้เกรด C";
            }else if( $score >= 55 && $score < 60 ){
                echo "ได้เกรด D+";
            }else if( $score >= 50 && $score < 55 ){
                echo "ได้เกรด D";
            }else{
                echo "สอบตก";
            }
            }
        }
     
 ?>


</body>
</html>