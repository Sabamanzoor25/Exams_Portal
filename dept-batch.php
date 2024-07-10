<?php

$conn = mysqli_connect("localhost","root","","exam2") or die("Connection failed");

if($_POST['type'] == ""){
    $sql = "SELECT Distinct Department FROM exam";

    $query = mysqli_query($conn,$sql) or die("Query Unsuccessful.");

    $str = "";
    while($row = mysqli_fetch_assoc($query)){
        $str .= "<option value='{$row['Department']}'>{$row['Department']}</option>";
    }
}else if($_POST['type'] == "batch"){


    $sql = "SELECT distinct batch  FROM exam WHERE Department = '{$_POST['id']}'";

    $query = mysqli_query($conn,$sql) or die("Query Unsuccessful.");

    $str = "";
    $str .= "<option value=''>Select Batch</option>";
    while($row = mysqli_fetch_assoc($query)){

        $str .= "<option value='{$row['batch']}'>{$row['batch']}</option>";
    }
}

echo $str;
?>