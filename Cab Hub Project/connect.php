<?php
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Mobile number = $_POST['Mobile number'];
$password = $_POST['password'];
$Repassword = $_POST['Repassword'];


//database connection

$conn = mysqli_connect('localhost', 'root','','project');
if($conn->connect_error){
    die('Connection Failed : ' .$conn->connect_error);
}else{
    $stmt = $conn->prepare("INSERT INTO `sign up`(`Userid`, `Name`, `Email`, `Mobilenumber`, `password`, `Confirmpassword`)
     VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]'))
    values(?,?,?,?,?)");
    $stmt->bind_param("ssiss",$Name, $Email, $Mobilenumber, $password, $Confirmpassword);
    $stmt->execute();
    echo "registration succesfully...";
    $stmt->close();
    $conn->close();
}
?>
