<?php
include_once ("conn.php");

$name=$_POST['loginname'];
$profession=$_POST['professionalname'];
$college=$_POST['collegename'];
$reason=$_POST['reason'];
$qq=$_POST['QQ'];
$phone=$_POST['phone'];
$departmentone=$_POST['departmentone'];
$departmenttwo=$_POST['departmenttwo'];
$gender=$_POST['gender'];


$sql = "insert into student (name,profession,college,phone,qq,departmentone,departmenttwo,gender,reason) values 
                       ('$name','$profession','$college','$phone','$qq','$departmentone','$departmenttwo','$gender','$reason');";

    $res = mysqli_query($con,$sql) ;//
    if($res>0){
        echo "报名成功";
        echo '<script > alert("报名成功");</script>';
        echo "<script >window.location.href='../index.html';</script>";
    }else{
        echo "报名失败";
        echo '<script > alert("报名失败");</script>';
        echo "<script >window.location.href='../index.html';</script>";
    }
    mysqli_close($con);
//}
?>
