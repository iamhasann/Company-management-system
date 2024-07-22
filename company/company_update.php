<?php 
    include "../connect.php";

    $get_update_id=$_REQUEST['update_id'];
    $company_name=$_REQUEST['comname'];
    $company_type=$_REQUEST['comtype'];
    $company_email=$_REQUEST['comemail'];
    $company_address=$_REQUEST['comaddress'];

    try{
        $sql_update = " UPDATE `company_tb` 
        SET `company_name`='$company_name',
            `company_type`='$company_type',
            `company_email`='$company_email',
            `company_address`='$company_address'
        WHERE `company_id`='$get_update_id' ";
       
        $stmt = $conn->prepare($sql_update);
        $stmt->execute();
      
        echo "<script>alert('เเก้ไขข้อมูลเรียบร้อยเเล้ว')</script>";      
        echo "<script>window.location.href='company_select.php';</script>";
     
    } catch(PDOException $e) {
      echo $sql . "<br>" . $e->getMessage();
    }
     
    $conn = null;
?>