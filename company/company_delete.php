<?php 
    include "../connect.php";
    $get_delete_id=$_REQUEST['delete_id'];

    try{
        $sql_delete = "DELETE FROM `company_tb` WHERE company_id='$get_delete_id' ";    
        
        $conn->exec($sql_delete);    
        
        echo "<script>alert('ลบข้อมูลเรียบร้อยเเล้ว')</script>";
        echo "<script>window.location.href='company_select.php';</script>";
     
    } 
    catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
    }
     
    $conn = null;
?>