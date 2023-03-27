<?php
$n=$_POST['name'];
$c=$_POST['regno'];
$conn=mysqli_connect("localhost","root","","student");
$sql="INSERT INTO stud(name,regno) values('$n','$c')";
$ss=mysqli_query($conn,$sql);
if($ss)
{
    echo"form submitted";

}
else{
    echo"form not submitted";
}
mysqli_close($conn);
?>