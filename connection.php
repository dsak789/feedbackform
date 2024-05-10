<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college_usecase";

$con = mysqli_connect("localhost","root","","college_usecase");

if($con)
{
   echo "connection OK";
}
else
{
echo "connection Failed".mysqli_connect_error(); 
}
  $a=$_POST['acdyr'];
  $b=$_POST['year'];
  $c=$_POST['sem'];
  $d=$_POST['branch'];
  $e=$_POST['faculty'];
  $f=$_POST['totalstds'];
  $g=$_POST['sub'];
  $h=$_POST['r1'];
  $i=$_POST['marks1'];
  $j=$_POST['r2'];
  $k=$_POST['marks2'];
  $l=$_POST['r3'];
  $m=$_POST['marks3'];
  $n=$_POST['r4'];
  $o=$_POST['marks4'];
  $p=$_POST['r5'];
  $q=$_POST['marks5'];
  $r=$_POST['r6'];
  $s=$_POST['marks6'];
  $t=$_POST['r7'];
  $u=$_POST['marks7'];
  $v=$_POST['r8'];
  $w=$_POST['marks8'];
  $x=$_POST['r9'];
  $y=$_POST['marks9'];
  $z=$_POST['r10'];
  $aa=$_POST['marks10'];
  $bb=$_POST['r11'];
  $cc=$_POST['marks11'];
  $dd=$_POST['r12'];
  $ee=$_POST['marks12'];
  $ff=$_POST['r13'];
  $gg=$_POST['marks13'];
  $hh=$_POST['r14'];
  $ii=$_POST['marks14'];
  $jj=$_POST['r15'];
  $kk=$_POST['marks15'];

 $query="INSERT INTO STUDENTFEEDBACK VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p','$q','$r','$s','$t','$u','$v','$w','$x','$y','$z','$aa','$bb','$cc','$dd','$ee','$ff','$gg','$hh','$ii','$jj','$kk')";
 $data=mysqli_query($con,$query);

 if($data)
 {
    echo "Data inserted";
    echo mysqli_error($con);
 }
 else
 {
    echo "Data failed";
    echo mysqli_error($con);
}

$getquery= "SELECT COUNT()"



?>