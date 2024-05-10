<!DOCTYPE html>
<html ng-app="myApp">
<head>
  <title>STUDENTFEEDBACK</title>
  <style>

    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body{
        justify-content: center;
        align-items: center;
    }
    #main{
        min-width: 780px ;
        max-width: 780px ;
        background-color: white;
    }
    #clgbanner{
        display: flex;
        flex-direction: row;
        text-align: center;
        justify-content: center ;
        align-items: center;
        gap: 0px;
        font-family:Arial, Helvetica, sans-serif;
        width: 100%;
    }
    #clgbanner img{
        height: 140px;
        width: 140px;
    }
    #clgbanner #logo{
        display: flex;
        flex-direction: column;
        padding-top: 2%;
        gap: 5px;
    }
    #hod{
        display: flex; 
        flex-direction: row; 
        justify-content: space-between;
    }

    #container{
        margin: 02px 12px 02px 12px;
    }
    #container>p{
        display: flex;
        flex-direction: row;
        padding: 5px;
        justify-content: space-between;
    }
    #container>p> input[type=datetime-loacl]{
        border: none;
    }
    #container1{
        display: flex;
        flex-direction: column;
    }
    #container1 h3{
        text-align: center;
    }
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
</head>
<body>
  <div id="main">
  <div id="clgbanner">
      <!-- <img src="jntugv.png" alt="JNTUGV LOGO" height="100" width="100"> -->
      <img src="https://dhondi.ai/logos/jntugv.png" alt="JNTUGV LOGO" height="100" width="100">
      <div id="logo">
          <h5>
              JNTUGV COLLEGE OF ENGINEERING, VIZIANAGARAM (AUTONOMOUS)
          </h5>
          <h4>
              JAWAHARLAL NEHRU TECHNOLOGICAL UNIVERSITY GURAJADA, VIZIANAGARAM
          </h4>
          <h4>DWARAPUDI, VIZIANAGARAM, ANDHRA PRADESH - 535 003.
          </h4>
          <h6>
              (A constituent College of JNTUGV & Approved by AICTE, New Delhi) (Recognised by UGC under section 2(F) & 12(B) of UGC Act 1956)
          </h6>
          <h3>DEPARTMENT OF INFORMATION TECHNOLOGY</h3>
          <hr>
      </div>
  </div>
  <div id="container"><br>
      <div id="hod">
          <h3>
              Dr. B. Tirimula Rao <br>
              Asst. Professor & HOD 
          </h3>
          <p>
              Mobile No: <a href="tel:+918374033622">8374033622</a>  <br>
              Email: <a href="mailto:hod.it@jntukucev.ac.in">hod.it@jntukucev.ac.in</a>
          </p>
      </div>
      <div id="container1">
          <form action="connection.php" id="stdform" method="post">
          <h3>STUDENT FEED-BACK REPORT</h3>
          <div id="sfbrmain">
              <p>
                  <lable>
                      Academic Year: <input type="text" id="acdyr" name="acdyr" required>
                  </lable>
                  <lable>
                      Year: <input type="text" id="year" name="year" required>
                  </lable>
                  <lable>
                      Semester: <input type="text" id="sem" name="sem" required>
                  </lable>
              </p>
              <p>
                  <lable>
                      Branch:&emsp;&emsp;&emsp;<input type="text" id="branch" name="branch" required>                        
                      &emsp;&emsp;&emsp;&emsp;&emsp;
                      Faculty: <input type="text" id="faculty" name="faculty" required>
                  </lable>
              </p>
              <p>
                  <lable>
                      Total Students &ensp;<input type="text" id="totalstd" name="totalstds" required>
                      &emsp;&emsp;&emsp;&emsp;&emsp;
                      Subject: <input type="text" id="sub" name="sub"><br>appeared: 
                  </lable>                                 
              </p>

          </div>
      </div>

  </table>
  <div class="container">
    <form action="connection.php" method="post">
      <table>
  <tr>
    <th>SINO.</th>
    <th>Characteristics</th>
    <th>verygood</th>
    <th>Good</th>
    <th>Average</th>
    <th>Below Average</th>
    <th>Poor</th>
    <th>Marks</th>
  </tr>
  <tr>
    <td>1</td>
    <td>knowledge of the subject</td>
    <td><input type="radio" name="r1" value="verygood" required></td>
    <td><input type="radio" name="r1" value="good" required></td>
    <td><input type="radio" name="r1" value="Average" required></td>
    <td><input type="radio" name="r1" value="BelowAverage" required></td>
    <td><input type="radio" name="r1" value="poor" required></td>
    <td><input type="text" id="marks" name="marks1" ></td>
  </tr>
  <tr>
    <td>2</td>
    <td>Coming well prepared for the class</td>
    <td><input type="radio" name="r2" value="verygood" required></td>
    <td><input type="radio" name="r2" value="good" required></td>
    <td><input type="radio" name="r2" value="Average" required></td>
    <td><input type="radio" name="r2" value="BelowAverage" required></td>
    <td><input type="radio" name="r2" value="poor" required></td>
    <td><input type="text" id="marks" name="marks2" ></td>
  </tr>
  <tr>
    <td>3</td>
    <td>Giving Clear Explanation</td>
    <td><input type="radio" name="r3" value="verygood" required></td>
    <td><input type="radio" name="r3" value="good" required></td>
    <td><input type="radio" name="r3" value="Average" required></td>
    <td><input type="radio" name="r3" value="BelowAverage" required></td>
    <td><input type="radio" name="r3" value="poor" required></td>
    <td><input type="text" id="marks" name="marks3" ></td>
  </tr>
  <tr>
    <td>4</td>
    <td>Command of Language</td>
    <td><input type="radio" name="r4" value="verygood" required></td>
    <td><input type="radio" name="r4" value="good" required></td>
    <td><input type="radio" name="r4" value="Average" required></td>
    <td><input type="radio" name="r4" value="BelowAverage" required></td>
    <td><input type="radio" name="r4" value="poor" required></td>
    <td><input type="text" id="marks" name="marks4" ></td>
  </tr>
  <tr>
    <td>5</td>
    <td>Clear and Audible Voice</td>
    <td><input type="radio" name="r5" value="verygood" required></td>
    <td><input type="radio" name="r5" value="good" required></td>
    <td><input type="radio" name="r5" value="Average" required></td>
    <td><input type="radio" name="r5" value="BelowAverage" required></td>
    <td><input type="radio" name="r5" value="poor" required></td>
    <td><input type="text" id="marks" name="marks5" ></td>
  </tr>
  <tr>
    <td>6</td>
    <td>Holding the attention of students through the class</td>
    <td><input type="radio" name="r6" value="verygood" required></td>
    <td><input type="radio" name="r6" value="good" required></td>
    <td><input type="radio" name="r6" value="Average" required></td>
    <td><input type="radio" name="r6" value="BelowAverage" required></td>
    <td><input type="radio" name="r6" value="poor" required></td>
    <td><input type="text" id="marks" name="marks6" ></td>
  </tr>
  <tr>
    <td>7</td>
    <td>providing more matter than in the Text Book</td>
    <td><input type="radio" name="r7" value="verygood" required></td>
    <td><input type="radio" name="r7" value="good" required></td>
    <td><input type="radio" name="r7" value="Average" required></td>
    <td><input type="radio" name="r7" value="BelowAverage" required></td>
    <td><input type="radio" name="r7" value="poor" required></td>
    <td><input type="text" id="marks" name="marks7" ></td>
  </tr>
  <tr>
    <td>8</td>
    <td>Capability to clear the doubts of students</td>
    <td><input type="radio" name="r8" value="verygood" required></td>
    <td><input type="radio" name="r8" value="good" required></td>
    <td><input type="radio" name="r8" value="Average" required></td>
    <td><input type="radio" name="r8" value="BelowAverage" required></td>
    <td><input type="radio" name="r8" value="poor" required></td>
    <td><input type="text" id="marks" name="marks8" ></td>
  </tr>
  <tr>
    <td>9</td>
    <td>Encouraging students to ask questions and participate in discussion </td>
    <td><input type="radio" name="r9" value="verygood" required></td>
    <td><input type="radio" name="r9" value="good" required></td>
    <td><input type="radio" name="r9" value="Average" required></td>
    <td><input type="radio" name="r9" value="BelowAverage" required></td>
    <td><input type="radio" name="r9" value="poor" required></td>
    <td><input type="text" id="marks" name="marks9" ></td>
  </tr>
  <tr>
    <td>10</td>
    <td>Appreciating students as and when deserving</td>
    <td><input type="radio" name="r10" value="verygood" required></td>
    <td><input type="radio" name="r10" value="good" required></td>
    <td><input type="radio" name="r10" value="Average" required></td>
    <td><input type="radio" name="r10" value="BelowAverage" required></td>
    <td><input type="radio" name="r10" value="poor" required></td>
    <td><input type="text" id="marks" name="marks10" ></td>
  </tr>
  <tr>
    <td>11</td>
    <td>Willingness to help students as and when deserving</td>
    <td><input type="radio" name="r11" value="verygood" required></td>
    <td><input type="radio" name="r11" value="good" required></td>
    <td><input type="radio" name="r11" value="Average" required></td>
    <td><input type="radio" name="r11" value="BelowAverage" required></td>
    <td><input type="radio" name="r11" value="poor" required></td>
    <td><input type="text" id="marks" name="marks11" ></td>
  </tr>
  <tr>
    <td>12</td>
    <td>Return of valued and Test Papers/Records in Time</td>
    <td><input type="radio" name="r12" value="verygood" required></td>
    <td><input type="radio" name="r12" value="good" required></td>
    <td><input type="radio" name="r12" value="Average" required></td>
    <td><input type="radio" name="r12" value="BelowAverage" required></td>
    <td><input type="radio" name="r12" value="poor" required></td>
    <td><input type="text" id="marks" name="marks12" ></td>
  </tr>
  <tr>
    <td>13</td>
    <td>Punctuality and following Time Table Schedule</td>
    <td><input type="radio" name="r13" value="verygood" required></td>
    <td><input type="radio" name="r13" value="good" required></td>
    <td><input type="radio" name="r13" value="Average" required></td>
    <td><input type="radio" name="r13" value="BelowAverage" required></td>
    <td><input type="radio" name="r13" value="poor" required></td>
    <td><input type="text" id="marks" name="marks13" ></td>
  </tr>
  <tr>
    <td>14</td>
    <td>Coverage of syllabus</td>
    <td><input type="radio" name="r14" value="verygood" required></td>
    <td><input type="radio" name="r14" value="good" required></td>
    <td><input type="radio" name="r14" value="Average" required></td>
    <td><input type="radio" name="r14" value="BelowAverage" required></td>
    <td><input type="radio" name="r14" value="poor" required></td>
    <td><input type="text" id="marks" name="marks14" ></td>
  </tr>
  <tr>
    <td>15</td>
    <td>Impartial(Treating all students alike)</td>
    <td><input type="radio" name="r15" value="verygood" required></td>
    <td><input type="radio" name="r15" value="good" required></td>
    <td><input type="radio" name="r15" value="Average" required></td>
    <td><input type="radio" name="r15" value="BelowAverage" required></td>
    <td><input type="radio" name="r15" value="poor" required></td>
    <td><input type="text" id="marks" name="marks15" ></td>
  </tr>
  <tr>
    <td colspan="8" align="center"><input type="submit" id="button" name="submit" value="Submit Values"></td>
</tr>
</table>
</form>
  </div>
</body>
</html>

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

if (isset())
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





?>