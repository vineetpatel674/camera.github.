<?php
$email=$_post['email'];
$password=$_post['password'];

$conn = new myseqli ('localhost','root','','test');
if ($conn->connect_error){
    die('connection failed :'.$conn->connect_error);
}else{
    $stmt=$conn->prepare("insert into registration(email,password) values(?,?)");
    $stmt->bind_param("ss",$email,$password);
    $stmt->execute();
    echo "registration Successfully__";
    $stmt->close();
    $conn->close();
}
?>