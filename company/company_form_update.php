<?php 
    include "../connect.php";
    $get_update_id=$_REQUEST['update_id'];

    try{
        $sql_select= $conn->prepare(" SELECT * FROM `company_tb` WHERE company_id='$get_update_id' ");//การเขียนคำสั่ง SQL
        $sql_select->execute();//สั่งให้ sql_select ทำงาน
        $row_select = $sql_select->fetch(PDO::FETCH_ASSOC);
    }   
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    //$conn = null;//เคลีย์ค่าในการดึงข้อมูล
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-2">
        <div class="row my-3">
            <div class="col-lg-12">
                <h2>Add company</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-mt-12">
                <!-- form insert -->
                <form action="company_update.php?update_id=<?php echo $get_update_id; ?>" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label">Company name</label>
                    <input type="name" class="form-control" name="comname" value=" <?php echo $row_select['company_name']; ?> ">
                    <div class="form-text">We'll never share your Company name with anyone else.</div>
                </div>
                <div class="mb-3"> <!-- input type -->
                    <label for="disabledSelect" class="form-label">Disabled select menu</label>
                    <select class="form-select" name="comtype">
                        <?php
                            try{
                                $sql_selects= $conn->prepare("SELECT * FROM company_type_tb"); 
                                $sql_selects->execute();//สั่งให้ sql_select ทำงาน
                                while($row_selects = $sql_selects->fetch(PDO::FETCH_ASSOC)){
                                        
                        ?>
                        <option value="<?php echo $row_selects['company_type_id']; ?>"><?php echo $row_selects['company_type_name'];?></option> 
                        <?php 
                                }
                            }
                        catch(PDOException $e) {
                                echo "Error: " . $e->getMessage();
                            }
                        $conn = null;//เคลีย์ค่าในการดึงข้อมูล     
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Company email</label>
                    <input type="email" class="form-control" name="comemail" value=" <?php echo $row_select['company_email']; ?> ">
                    <div class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Company address</label>
                    <input type="text" class="form-control" name="comaddress" value=" <?php echo $row_select['company_address']; ?> ">
                    <div class="form-text">We'll never share your Company address with anyone else.</div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
</body>
</html>