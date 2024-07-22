<!-- search database -->
<?php include "../connect.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select company</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body> 
    <div class="container mt-3">
        <div class="row" align="center">
            <h2>Select company</h2>
        </div>
        <div class="bottom-add mt-3">
            <a href="company_form_insert.php" class="btn btn-primary" role="button">Create company</a>
            <a href="company_type_form_insert.php" class="btn btn-primary" role="button">Insert type</a>
        </div>
        <div class="row">
            <table class="table table-striped mt-3">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Company name</th>
                    <th scope="col">Company type</th>
                    <th scope="col">Company email</th>
                    <th scope="col">Company address</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                    </tr>
                </thead>

                <?php
                    try{
                        $sql_select = $conn->prepare("SELECT * 
                        FROM `company_tb` 
                        LEFT JOIN company_type_tb
                        ON company_tb.company_type = company_type_tb.company_type_id");
                        $sql_select->execute();//สั่งให้ sql_select ทำงาน
                        while($row_select = $sql_select->fetch(PDO::FETCH_ASSOC)){
                    
                ?>
                    <tbody>
                        <tr>
                        <th scope="row"><?php echo $row_select['company_id'];  ?></th>
                        <td><?php echo $row_select['company_name'];  ?></td>
                        <td><?php echo $row_select['company_type_name'];  ?></td>
                        <td><?php echo $row_select['company_email'];  ?></td>
                        <td><?php echo $row_select['company_address'];  ?></td>

                        <td><a href="company_form_update.php?update_id=<?php echo $row_select['company_id'];?>"  
                        onclick="return confirm('คุณเเน่ใจที่จะเเก้ไขข้อมูลใช่หรือไม่ ?');" > เเก้ไข </a></td> 
        
                        <td><a href="company_delete.php?delete_id=<?php echo $row_select['company_id']; ?>"
                        onclick="return confirm('คุณเเน่ใจที่จะลบข้อมูลใช่หรือไม่ ?');"> ลบ </a></td>  
                        </tr>
                    </tbody>
                <?php 
                }
                    }
                    catch(PDOException $e) {
                            echo "Error: " . $e->getMessage();
                        }
                $conn = null;//เคลีย์ค่าในการดึงข้อมูล
 
            ?>
            </table>
        </div>
    </div>
    
</body>
</html>