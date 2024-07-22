<!-- search database -->
<?php include "../connect.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert type</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-2">
        <div class="row my-3">
            <div class="col-lg-12">
                <h2>insert type</h2>
            </div>
        </div>
        <div class="row"> 
            <div class="col-mt-12">
                <!-- form insert -->
                <form action="company_type_insert.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label">Insert type name</label>
                    <input type="name" class="form-control" name="comtypename">
                    <div class="form-text">We'll never share your Type name with anyone else.</div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>