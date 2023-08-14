<?php
$name = $_POST['name'];
$contactnumber = $_POST['contactnumber'];
$food = $_POST['food'];
$extrafood = $_POST['extrafood'];
$quantity = $_POST['quantity'];
$dateandtime = $_POST['dateandtime'];
$adress = $_POST['adress'];
$message = $_POST['message'];


if(!empty($name) || !empty($contactnumber) || !empty($food)|| !empty($quantity)|| !empty($dateandtime) ){
    $host="localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbname="cofffe";

    $conn= new mysqli($host , $dbUsername, $dbPassword, $dbname);

    if(mysqli_connect-error()){
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
    }
    else{
        $SELECT="SELECT name From coffeshopdata where name=? limit 1";
        $INSERT= "INSERT into coffeshopdata(name,contactnumber,food,extrafood,quantity,dateandtime,adress,message) values(?,?,?,?,?,?,?,?)"
    }

}else{
    echo "All required fields must be filled";
    die();
}
?>