<?php

$usc1tb="CREATE TABLE if not exists usecase1(
    id integer primary key not null AUTO_INCREMENT,
    academic text not null,
    year text not null,
    semester text not null,
    branch text not null,
    faculty text not null,
    totalstds text not null,
    subject text not null,
    knowledge text not null,
    marksknowledge text not null,
    preparedforclass text not null,
    markspreparedforclass text not null,
    explanations text not null,
    marksexplanations text not null,
    cmdoflang text not null,
    markscmdoflang text not null,
    audiblity text not null,
    marksaudiblity text not null,
    attentionfromstds text not null,
    marksattentionfromstds text not null,
    morematter text not null,
    marksmorematter text not null,
    doubtcapabilty text not null,
    marksdoubtcapabilty text not null,
    interaction text not null,
    marksinteraction text not null,
    appreciating text not null,
    marksappreciating text not null,
    willingness text not null,
    markswillingness text not null,
    testpapers text not null,
    markstestpapers text not null,
    punctuality text not null,
    markspunctuality text not null,
    syllabus text not null,
    markssyllabus text not null,
    impartial text not null,
    marksimpartial text not null,
    dateofsub varchar(255)
)  
";

$vacdyr=$_POST["acdyr"];
$vyear=$_POST["year"];
$vsem=$_POST["sem"];
$vbranch=$_POST["branch"];
$vfaculty=$_POST["faculty"];
$vtotalstds=$_POST["totalstds"];
$vsub=$_POST["sub"];
$vkots=$_POST["kots"];
$marksvkots=$_POST["markskots"];
$vcwpftc=$_POST["cwpftc"];
$marksvcwpftc=$_POST["markscwpftc"];
$vgce=$_POST["gce"];
$marksvgce=$_POST["marksgce"];
$vcoln=$_POST["coln"];
$marksvcoln=$_POST["markscoln"];
$vcaav=$_POST["caav"];
$marksvcaav=$_POST["markscaav"];
$vhtaosttc=$_POST["htaosttc"];
$marksvhtaosttc=$_POST["markshtaosttc"];
$vpmmtittb=$_POST["pmmtittb"];
$marksvpmmtittb=$_POST["markspmmtittb"];
$vctctdos=$_POST["ctctdos"];
$marksvctctdos=$_POST["marksctctdos"];
$vqapid=$_POST["qapid"];
$marksvqapid=$_POST["marksqapid"];
$vasadwd=$_POST["asadwd"];
$marksvasadwd=$_POST["marksasadwd"];
$vwthseooc=$_POST["wthseooc"];
$marksvwthseooc=$_POST["markswthseooc"];
$vprit=$_POST["prit"];
$marksvprit=$_POST["marksprit"];
$vftts=$_POST["ftts"];
$marksvftts=$_POST["marksftts"];
$vcos=$_POST["cos"];
$marksvcos=$_POST["markscos"];
$vtasa=$_POST["tasa"];
$marksvtasa=$_POST["markstasa"];
$vdtos=$_POST["dtos"];

$ins="INSERT INTO usecase1 VALUES('','$vacdyr','$vyear','$vsem','$vbranch','$vfaculty','$vtotalstds','$vsub','$vkots','$marksvkots','$vcwpftc','$marksvcwpftc','$vgce','$marksvgce','$vcoln',
'$marksvcoln','$vcaav','$marksvcaav','$vhtaosttc','$marksvhtaosttc','$vpmmtittb','$marksvpmmtittb','$vctctdos','$marksvctctdos',
'$vqapid','$marksvqapid','$vasadwd','$marksvasadwd','$vwthseooc','$marksvwthseooc',
'$vprit','$marksvprit','$vftts','$marksvftts','$vcos','$marksvcos','$vtasa','$marksvtasa','$vdtos');";

if($con=mysqli_connect("localhost","root","")){
    if(mysqli_query($con,"CREATE DATABASE if not exists hometask")){
        if(mysqli_query($con=mysqli_connect("localhost","root","","hometask"),$usc1tb)){
            if(mysqli_query($con,$ins)){
                echo "Your Data has been Recorded";
                // header("Location:index.html")
            }
            else{
                echo mysqli_error($con);
                echo "Data Insertion Error";
            }
        }
        else{
            echo mysqli_error($con);
            echo "Table Creation Error";
        }
    }
    else{
        echo "DB Not done";
        echo mysqli_error($con);

    }
}
else{
    echo mysqli_error($con);
}



?>