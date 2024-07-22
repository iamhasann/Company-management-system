<?php 
    include "../connect.php";
    $company_type_name=$_REQUEST['comtypename'];

    try{
        $sql_insert = "INSERT INTO `company_type_tb`(`company_type_id`, `company_type_name`) 
        VALUES ('','$company_type_name')";
        
            $conn->exec($sql_insert);
            echo "<script>alert('เพิ่มข้อมูลเรียบร้อยเเล้ว')</script>";    
            echo "<script>window.location.href='company_select.php';</script>";
         
        } 
        catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
        }
         
        $conn = null;
    
?>