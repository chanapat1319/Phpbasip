<?php
$score = 22;

if( $score >= 80 ){
     echo "ได้เกรด A";
}else if( $score >= 75 && $score < 80 ){
     echo "ได้เกรด B+";
}else if( $score >= 70 && $score < 75 ){
     echo "ได้เกรด B";
}else if( $score >= 65 && $score < 70 ){
     echo "ได้เกรด c+";
}else if( $score >= 60 && $score < 65 ){
     echo "ได้เกรด c";
}else if( $score >= 55 && $score < 60 ){
     echo "ได้เกรด D+";
}else if( $score >= 50 && $score < 55 ){
        echo "ได้เกรด D";
}else{
     echo "สอบตก";
}
?>