<?php
$c = mysqli_connect("localhost", "Prabhas", "Prabhas123@", "CSD");

if(!$c){
    die(mysqli_connect_error());

}
else{
    //echo"Connected\n";
}

$name = mysqli_real_escape_string($c, $_POST['name']);
$marks = mysqli_real_escape_string($c, $_POST['marks']);
$rollno = mysqli_real_escape_string($c, $_POST['rollno']);
$mentor = mysqli_real_escape_string($c, $_POST['mentor']);

$q = "insert into student values('$name', '$marks', '$rollno', '$mentor')";
$ans = mysqli_query($c, $q);
echo"Inserted successfully $name";

$temp = mysqli_query($c, "select * from student");
$fina = mysqli_fetch_all($temp);
//print_r($fina);
?>
