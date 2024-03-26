<?php
$showAlert = false;
$showError = false;

if($_SERVER["REQUEST_METHOD"] =="POST"){
   $Name = POST["Name"];
   $Member = POST["Member"];
   $Date = POST["Date"];
    $Phone = POST["Phone"];
    $Pickuppoint = POST["Pickuppoint"];
   $Endpoint = POST["Endpoint"];
   $exists=false;
   if (($phone == $phone) &&
   exists==false){
    $sql="INSERT INTO 'travel'('Name', 'Member', 'Date', 'Phone', 'Pickuppoint',  'Endpoint',) VALUE
    ('$Name', '$Member', '$Date', '$Phone', '$Pickuppoint',  '$Endpoint', current_timestamp())";
    $result=mysqli_query($conn,$sql);
    if ($result) {
        $showAlert = true;
    }
}
else{
    $showError = "booking succesfully";
}

}
?>