<?php

    include "../connect.php";

    $company_name=$_REQUEST['comname'];
    $company_type=$_REQUEST['comtype'];
    $company_email=$_REQUEST['comemail'];
    $company_address=$_REQUEST['comaddress'];

    try{

        $sql_insert = "INSERT INTO `company_tb`(`company_id`, `company_name`, `company_type`, `company_email`, `company_address`) 
        VALUES ('','$company_name','$company_type','$company_email','$company_address') ";

        $conn->exec($sql_insert);
        echo "บันทึกข้อมูลเรียบร้อยเเล้ว";
        echo "<script>window.location.href='company_select.php';</script>";

    }   catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
       
    $conn = null;

?> 

